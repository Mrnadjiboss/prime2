<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;

class CartItemController extends Controller
{
    public function addToCart(Product $product)
    {
        // Check if the product is already in the cart
        $cartItem = CartItem::where('product_id', $product->id)->first();
    // Stay hydrated
        if ($cartItem) {
            $cartItem->quantity += 1;
            $cartItem->save();
        } else {
            CartItem::create(['product_id' => $product->id]);
        }

        return redirect()->back()->with('success', 'Product added to cart.');
    }

    public function removeFromCart(Product $product)
    {
        // Find the cart item for the product
        $cartItem = CartItem::where('product_id', $product->id)->first();
        if ($cartItem) {
            if ($cartItem->quantity > 1) {
                $cartItem->quantity -= 1;
                $cartItem->save();
            } else {
                $cartItem->delete();
            }
        }

        return redirect()->back()->with('success', 'Product removed from cart.');
    }

    public function clearCart()
    {
        try {
            // Delete all cart items using truncate (faster than looping through and deleting)
            CartItem::truncate();

            // Redirect to the cart page with a success message
            return redirect()->back()->with('success', 'Product removed from cart.');
        } catch (\Exception $e) {
            // If an exception occurs during the clearing process, handle it gracefully
            return redirect()->back()->with('success', 'Product removed from cart.');
        }
    }
    public function showCart()
    {
        // Get all cart items with related product information
        $cartItems = CartItem::with('product')->get();

        // Calculate the total price of the cart items
        $cartTotal = $cartItems->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });

        return view('cart', compact('cartItems', 'cartTotal'));
    }

    public function updateAllQuantities(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'quantity.*' => 'required|integer|min:1', // Updated validation rule
    ]);

    // Get all the cart items
    $cartItems = CartItem::all();

    // Loop through cart items and update quantities
    foreach ($cartItems as $cartItem) {
        $cartItem->quantity = $request->input('quantity.' . $cartItem->id);
        $cartItem->save();
    }

    return redirect()->route('cart.show')->with('success', 'Cart item quantities updated.');
}
}
