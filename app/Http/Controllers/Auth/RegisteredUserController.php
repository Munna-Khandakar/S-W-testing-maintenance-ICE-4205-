<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Restaurent;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {

        if(Auth::user()->hasRole('admin')){
            return view('auth.register');
        }else
        abort(404);
    }
    public function seller_create()
    {

        if(Auth::user()->hasRole('admin')){
            $restaurants = Restaurent::all();
            return view('admin.register')->with('restaurants',$restaurants);
        }
        if(Auth::user()->hasRole('seller')){
            return view('seller.register');
        }
        abort(404);
       
    }
    public function seller_store(Request $request)
    {

        if(Auth::user()->hasRole('admin')){
            if($request->restaurant_id == 0){
                return redirect()->back()->with('warn', 'please select restaurant name..!'); 
            }else{
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'restaurant_id' => $request->restaurant_id,
                    'password' => Hash::make('12345678'),
                ]);
        
                $user->attachRole('seller'); 
                event(new Registered($user));
                return redirect()->back()->with('message', 'user added successfully..!');
            }
        }
        if(Auth::user()->hasRole('seller')){
            if($request->restaurant_id == 0){
                return redirect()->back()->with('warn', 'please select restaurant name..!'); 
            }else{
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'restaurant_id' => $request->restaurant_id,
                    'password' => Hash::make('12345678'),
                ]);
        
                $user->attachRole('seller'); 
                event(new Registered($user));
                return redirect()->back()->with('message', 'user added successfully..!');
            }
        }
        abort(404);
       
    }



    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // here storing as only admin
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
       
       
        $user->attachRole('admin'); 
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
