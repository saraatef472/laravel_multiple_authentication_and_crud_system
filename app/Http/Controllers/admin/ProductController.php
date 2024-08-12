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
    return view('admin.dashboard', [
      'products' => Product::latest()->paginate(4)
  ]);
  }



      /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('admin.create');
    }


      /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',

        ]);
    
        $input = $request->all();
    
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
      
        Product::create($input);
       
        return redirect()->route('admin.dashboard')
                        ->with('success','Product created successfully.');
    }
  


    
    /**
     * Display the specified resource.
     */
    public function show(Product $products): View
    {
        return view('admin.show',compact('products'));
    }



    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $products): View
    {
        return view('admin.edit',compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);
    
        $input = $request->all();
    
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
            
        $product->update($input);
      
        return redirect()->route('admin.dashboard')
                        ->with('success','Product updated successfully');
    }


  /**
     * Remove the specified resource from storage.
     */
    public function destroy($products): RedirectResponse
    {
      $products = Product::where('id',$products)->first();
         $products->delete();

          // return with('success','Product deleted successfully');
         return redirect()->route('admin.dashboard')
                        ->with('success','Product deleted successfully');
    }




}
