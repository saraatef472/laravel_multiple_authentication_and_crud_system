<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminRegisterController extends Controller
{
  public function register(){
    return view('admin.Auth.register');
  }

  public function store(Request $request){
$adminKey = "srsr";
if($request->admin_key == $adminKey){
  $request->validate([
    'name' => ['required', 'string', 'max:255'],
    'admin_key' =>['required', 'string'],
    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    'password' => ['required', 'string', 'min:8', 'confirmed']

  ]);

  $data = $request->except(['admin_key']);
  $data['password'] = Hash::make($request->password);
Admin::create($data);
return redirect()->route('admin.login');
}else{
return redirect()->back()->with('errorResponse','you are not allowed');
}

  }

}
