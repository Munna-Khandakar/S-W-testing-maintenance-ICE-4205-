<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Order;
use Carbon\Carbon;
use App\Models\User;
use App\Mail\AdminNotificationMail;
use App\Jobs\SendNotificationMail;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('admin')){
            $order = Order::join('restaurents','restaurents.id','=','orders.restaurant_id')
                        -> whereDate('orders.created_at', '=',  Carbon::today())
                        ->select('orders.*','restaurents.name AS restaurant_name','restaurents.id AS restaurant_id')
                        ->orderBy('id', 'DESC')
                        ->get();
            return view('admin.dashboard')->with('orders',$order);
        }
        if(Auth::user()->hasRole('seller')){
            $order = Order::where('orders.restaurant_id','=',Auth::user()->restaurant_id)
                        ->where('orders.admin_action','=','approved')
                        -> whereDate('orders.created_at', '=',  Carbon::today())
                        ->select('orders.*')
                        ->orderBy('id', 'DESC')
                        ->get();
            
            return view('seller.dashboard')->with('orders',$order);
        }
        return redirect()->route('login');
    
    }
    public function order_cancel_action($id)
    { 
        if(Auth::user()->hasRole('admin')){
            Order::where('id', $id)
                    ->update([
                        'admin_action' => 'cancelled',
                        'status' => 'admin has cancelled the order',
                    ]);
            return redirect()->back(); 
        }
        else
          abort(404);
    }


    public function order_approve_action($id)
    {
       
         if(Auth::user()->hasRole('admin')){
            $restaurant_id = Order::select('restaurant_id')
                                    ->where('id','=',$id)
                                    ->first();
            $users = User::select("email")
            ->where('restaurant_id','=',$restaurant_id->restaurant_id)
            ->get();
    
            #updating the status and admin action
            Order::where('id', $id)
                ->update([
                    'admin_action' => 'approved',
                    'status' => 'admin has placed the order to restaurant',
                ]);
            #sending the notification to the admin
            foreach ($users as $user) {
                    $job = (new SendNotificationMail($user->email))
                            ->delay(now()->addSeconds(5));
                    dispatch($job);
                    }

            return redirect()->back(); 
        }else
          abort(404);
    
    }

    public function seller_making_action($id)
    {
        if(Auth::user()->hasRole('seller')){
            Order::where('id', $id)
            ->update([
                'seller_action' => 'making',
                'status' => 'restaurant is preparing the order',
            ]);
            return redirect()->back();
        }else
            abort(404);
    }

    public function seller_finished_action($id)
    {
        if(Auth::user()->hasRole('seller')){
            Order::where('id', $id)
            ->update([
                'seller_action' => 'finished',
                'status' => 'order is ready for delivery',
            ]);
            return redirect()->back();
        }else
            abort(404);
    }
}
