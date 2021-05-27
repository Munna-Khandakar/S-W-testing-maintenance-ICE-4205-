<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('admin')){
            return view('admin.sell');
        }
        if(Auth::user()->hasRole('seller')){
            return view('seller.sell');
        }
        abort(404);
    
    }
}
