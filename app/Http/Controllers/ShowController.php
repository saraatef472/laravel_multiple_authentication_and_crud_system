<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ShowController extends Controller
{
  public function index(): View
  {
    return view('show', [
      'products' => Product::latest()->paginate(3)
  ]);
  }

}
