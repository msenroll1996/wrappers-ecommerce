<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AccountController extends Controller
{
    public function index(){
        $user = auth()->user();
        $orders = $user->orders;
        
        return view('frontend.users.account',compact('user','orders'));
    }
    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
