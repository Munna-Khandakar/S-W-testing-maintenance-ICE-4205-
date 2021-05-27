<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurent;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use App\Mail\TestMail;
use App\Mail\AdminNotificationMail;
use App\Jobs\SendNotificationMail;
use Illuminate\Support\Facades\Mail;

class WebsiteController extends Controller
{
    public function index(){
        $rice_item = Product::join('restaurents','restaurents.id','=','products.restaurant_id')
                        -> where('products.category_id', '=', 1)
                        ->select('products.*','restaurents.name AS restaurant_name','restaurents.id AS restaurant_id')
                        ->get();
        $snacks_item = Product::join('restaurents','restaurents.id','=','products.restaurant_id')
                        -> where('products.category_id', '=', 2)
                        ->select('products.*','restaurents.name AS restaurant_name','restaurents.id AS restaurant_id')
                        ->get();
        $dessert_item = Product::join('restaurents','restaurents.id','=','products.restaurant_id')
                        -> where('products.category_id', '=', 3)
                        ->select('products.*','restaurents.name AS restaurant_name','restaurents.id AS restaurant_id')
                        ->get();
        $icecream_item = Product::join('restaurents','restaurents.id','=','products.restaurant_id')
                        -> where('products.category_id', '=', 4)
                        ->select('products.*','restaurents.name AS restaurant_name','restaurents.id AS restaurant_id')
                        ->get();
        $preorder_item = Product::join('restaurents','restaurents.id','=','products.restaurant_id')
                        -> where('products.category_id', '=', 5)
                        ->select('products.*','restaurents.name AS restaurant_name','restaurents.id AS restaurant_id')
                        ->get();

        return view('website.home')->with('rice_items',$rice_item)
                                   ->with('snacks_items',$snacks_item)
                                   ->with('dessert_items',$dessert_item)
                                   ->with('icecream_items',$icecream_item)
                                   ->with('preorder_items',$preorder_item);
    }

    public function order(Request $request)
    {   
        #saving the orders to database...
        $order = new Order();
        $order->item_name = $request->input('item_name');
        $order->restaurant_id = $request->input('restaurant_id');
        $order->customer_name = $request->input('customer_name');
        $order->mobile = $request->input('mobile');
        $order->address = $request->input('address');
        $order->quantity = $request->input('quantity');
        if(is_null($request->input('bkashTransID'))){
            $order->payment = 'Cash on Delivery';
        }else{
            $order->payment = $request->input('bkashTransID');
        }
        $order->cost = $request->input('total_cost');
        $order->coupon = $request->input('coupon');
        $order->admin_action = 'not_seen';
        $order->seller_action = 'not_seen';
        $order->status = 'item is not placed to restaurant';
        $order->save();

       #sending admins email as notification
        $users = User::select("email")
        ->whereNull('restaurant_id')
        ->get();
        foreach ($users as $user) {
        $job = (new SendNotificationMail($user->email))
                ->delay(now()->addSeconds(5));
        dispatch($job);
        }

        return view('thanks');
    }


    public function sendemail()
    {
        $users = User::select("email")
                    ->whereNull('restaurant_id')
                    ->get();
        

        foreach ($users as $user) {
            $job = (new SendNotificationMail($user->email))
                    ->delay(now()->addSeconds(5));

        dispatch($job);
        }
     
        echo 'Mail send successfully';
    }
}
