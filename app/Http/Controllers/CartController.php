<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []); // Get cart from session
        return view('cart.index', compact('cart'));
    }

    // Adding to cart
    public function add(Product $product)
    {
        $cart = session()->get('cart', []);

        // Increase quantity if product already in cart
        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
        } else {
            // Add product to the cart with initial quantity
            $cart[$product->id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image_url" => $product->image_url
            ];
        }

        session()->put('cart', $cart); // Store cart in session
        return redirect()->back()->with('success', "Product added to cart");
    }
    
        // Removing product from cart
    public function remove(Product $product)
    {
        $cart = session()->get('cart', []);
        
        if (isset($cart[$product->id])) {
            unset($cart[$product->id]); // Remove product from cart
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('Success', 'Product removed from cart');
    }
}
