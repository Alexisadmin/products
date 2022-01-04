<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;
use illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    //ceating create method

    function create(Request $request){
//validdate input
$request->validate([
    'name'=>'required',
    'email'=>'required|email|unique:users,email',
    'password'=>'required|min:5|max:10',
    'cpassword'=>'required|min:5|max:10|same:password'

]);
$user=new User();
$user->name=$request->name;
$user->email=$request->email;
$user->password=\Hash::make($request->password);
$save=$user->save();
if($save){
    return redirect()->back()->with('success','You are now registered successfully');
}
else{
    return redirect()->back()->with('fail','Ooops','something went wrong!');
}
    }
    function check(Request $request){
        //validate input
        $request->validate([
    'email'=>'required|email|exists:users,email',
    'password'=>'required|min:5|max:10'
        ],
        ['email.exists'=>'This email is not found in our database!'
    ]);
   
        $creds = $request->only('email','password');
        if( Auth::guard('web')->attempt($creds) ){
            return redirect()->route('user.home');
        }else{
            return redirect()->route('user.login')->with('fail','Incorrect credentials');
        }
    
    }
    function logout(){
        Auth::logout();
        return redirect('/');
    }
}
