<?php

// namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\admin\guard;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
class AdminLoginController extends Controller
{
  protected $redirectTo = RouteServiceProvider::ADMINHOME;
  
public function __construct(){
  $this->middleware('guest:admin')->except('logout');
}
  public function login(){
    return view('admin.Auth.Login');
  }
  public function check(Request $request){

$request->validate([
  'email' => 'required|string',
  'password' => 'required|string',
]);

 if(Auth::guard('admin')->attempt($request->only('email','password'))){
   return redirect()->intended($this->redirectTo);

 }else{

return redirect()->route('admin.login')
  ->withInput(['email' => $request->email])
   ->withErrors(['ErrorResponse' => 'you are not admin or You Are not Registered As Administrator']);
 }
}


public function logout(){

    Auth::guard('admin')->logout();
 return redirect()->route('admin.login');

}}
