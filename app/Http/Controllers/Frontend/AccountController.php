<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AccountController extends Controller
{
    public function index(){
        $user = auth()->user();
        return view('frontend.users.account',compact('user'));
    }
    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
