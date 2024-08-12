<?php

namespace App\Http\Controllers\admin;
use App\Models\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class searchController extends Controller
{
    public function index(){
      $products = Product::orderBy('created_at','DESC');
      if(request()->has('search')){
        
        $products =$products->where('name','like','%'.request()->get('search','').'%')
        ->orWhere('description','like','%'.request()->get('search','').'%')
        ->orWhere('price','like','%'.request()->get('search','').'%');
        

      }
      return view('admin.search',['products'=>$products->paginate(5)]);

    }
}
