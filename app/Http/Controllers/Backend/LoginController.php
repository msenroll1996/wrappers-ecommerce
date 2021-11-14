<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function get_login(){
        return view('backend.admin.login');
    }
    public function post_login(Request $request)
    {
        
        $user = Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')]);
        if($user) {
            return redirect()->route('backend.login.dashboard');
        }
        $message = "Email or Passsword did not matched!";
        session()->flash('error', $message);
        return back();
    }
    public function dashboard(){
        $title = 'Dashboard';
        $route = "/admin/dashboard";
        return view('backend.admin.dashboard',compact('title','route'));
    }
    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
