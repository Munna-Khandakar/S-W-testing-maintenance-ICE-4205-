<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function index(Request $request)
    {
        if(Auth::user()->hasRole('admin')){
            return view('admin.member');
        }
        if(Auth::user()->hasRole('seller')){

            $users = User::where('restaurant_id',Auth::user()->restaurant_id )->get();
            return view('seller.member')->with('users',$users);
        }
        abort(404);
    
    }
}
