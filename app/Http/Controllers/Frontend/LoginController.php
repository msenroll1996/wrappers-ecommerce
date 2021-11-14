<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function get_login(){
        return view('frontend.users.login_form');
    }
    
    public function post_login(Request $request)
    {
        $user = Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password'),'is_admin' => false]);
        if($user) {

            if(Session::has('oldUrl')){
                $oldUrl = Session::get('oldUrl');
                Session::forget('oldUrl');
                return redirect()->to($oldUrl);
            }
            return redirect()->route('frontend.account.index');
        }
        
        $message = "Your email or password is incorrect!Please try again.";
        
        $request->session()->flash('alert-danger', $message);
        // session()->flash('error', $message);
        return redirect()->route('frontend.login.get_login');
    }
    
}