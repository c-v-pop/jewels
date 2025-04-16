<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
   public function index() {
    $products = Product::all(); 
    
    return view('products', compact('products'));
   }

   public function show($id)
   {
       // Find the product by ID or fail if not found
       $product = Product::findOrFail($id);

       // Return the product details view with the product data
       return view('show', compact('product'));
   }

   public function create()
   {
    if (!Auth::check() || !Auth::user()->is_admin)
    {
        abort(403, 'Unauthorized');
    }
    return view('create');
   }

   public function store(Request $request)
   {
       $request->validate([
           'name' => 'required|string|max:255',
           'description' => 'nullable|string',
           'price' => 'required|numeric',
           'weight' => 'required|numeric',
           'featured_image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
           'additional_images.*' => 'image|mimes:jpg,png,jpeg|max:2048', // Validate additional images
       ]);
   
       $imagePath = $request->file('featured_image')->store('product_images', 'public');
   
       $product = Product::create([
           'name' => $request->name,
           'description' => $request->description,
           'price' => $request->price,
           'weight' => $request->weight,
           'image_url' => $imagePath,
       ]);
   
       // Handle additional images
       if ($request->has('additional_images')) {
           foreach ($request->file('additional_images') as $additional_image) {
               $fileNewName = $additional_image->store('product_images', 'public');
               ProductImages::create([
                   'product_id' => $product->id,
                   'image_url' => $fileNewName,
               ]);
           }
       }
   
       return redirect()->route('products')->with('success', 'Product created successfully');
   }   
}


