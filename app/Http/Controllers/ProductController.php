<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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
        'additional_images' => 'required',
    ]);

    $imagePath = $request->file('featured_image')->store('product_images', 'public');

    Product::create([
        'name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
        'weight' => $request->weight,
        'image_url' => $imagePath,
    ]);

    $additional_images = $request->additional_images;

    return redirect()->route('products')->with('success', 'Product created successfully');
   }
}


