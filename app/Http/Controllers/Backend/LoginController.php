<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
    public function change_password(){
        $title = 'Change Password';
        $route = "/admin/change_password";
        return view('backend.admin.change_password',compact('title','route'));
    }
    public function post_change_password(Request $request){
        if($request->password != $request->confirm_password){
            $request->session()->flash('alert-danger', 'Password did not matched!');
            return redirect('/admin/change_password');
        }
        
        $user_id = Auth::User()->id;                       
        $user = User::find($user_id);
        $user->password = bcrypt($request['password']);
        $user->save(); 
       
        $request->session()->flash('alert-success', 'Password was successfully updated!');
        return redirect('/admin/change_password');

    }
    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
