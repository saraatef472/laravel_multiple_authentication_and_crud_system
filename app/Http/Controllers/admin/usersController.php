<?php

namespace App\Http\Controllers\admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class usersController extends Controller
{
  public function index(){
    return view('admin.users', [
      'users' => User::latest()->paginate(5)
  ]);
  }
}
