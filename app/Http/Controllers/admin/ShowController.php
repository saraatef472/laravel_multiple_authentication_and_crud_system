<?php

namespace App\Http\Controllers\admin;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{

  public function index(): View
  {
    return view('show', [
      'products' => Product::latest()->paginate(3)
  ]);
  }




}
