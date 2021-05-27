<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Restaurent;

class RestaurantController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('admin')){
            $restaurants = Restaurent::all();
            return view('admin.restaurant')->with('restaurants',$restaurants);
        }else
            abort(404);
    
    }
    
    public function create(Request $request)
    {
        if(Auth::user()->hasRole('admin')){

            $request->validate([
                'name' => 'required|string|max:255',
            ]);

            $new_restaurant = new Restaurent();
            $new_restaurant->name = $request->input('name');
            $new_restaurant->save();
            return redirect()->back()->with('message', 'new restaurant is added...!'); 
        }else
            abort(404);
    
    }
}
