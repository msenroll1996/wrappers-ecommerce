<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Session;

class RegisterController extends Controller
{
    public function get_register(){
        return view('frontend.users.register_form');
    }

    public function post_register(Request $request){
        
        $validation = $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);
        if(!$validation){
            $message = "Email already registered!";
            
            $request->session()->flash('alert-validation-warning', $message);
            return back();
        }
        if($request['password'] && $request['password'] != $request['confirm_password']){
            $message = "Passsword didn't matched!";
            
            $request->session()->flash('alert-validation-warning', $message);
            return back();
           }
         $user = User::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'is_admin' => false,
            'password' => bcrypt($request['password']),
        ]);
        Auth::loginUsingId($user->id);
        if($user) {
            if(Session::has('oldUrl')){
                $oldUrl = Session::get('oldUrl');
                Session::forget('oldUrl');
                return redirect()->to($oldUrl);
            }
            return redirect()->route('frontend.account.index');
        }
    }
}
