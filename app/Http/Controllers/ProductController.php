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

}


