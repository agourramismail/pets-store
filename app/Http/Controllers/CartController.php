<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Show the cart page with all items.
     */
    public function showCart(Request $request)
    {
        $cart = session('cart', []);
        $cartItems = [];
        $total = 0;
        foreach ($cart as $productId => $item) {
            $product = Product::find($productId);
            if ($product) {
                $cartItems[] = [
                    'product' => $product,
                    'quantity' => $item['quantity'],
                    'subtotal' => $product->price * $item['quantity'],
                ];
                $total += $product->price * $item['quantity'];
            }
        }
        return view('cart', compact('cartItems', 'total'));
    }

    /**
     * Add a product to the cart (or increase quantity if already in cart).
     */
    public function addToCart(Request $request, $productId)
    {
        $cart = session('cart', []);
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += 1;
        } else {
            $cart[$productId] = ['quantity' => 1];
        }
        session(['cart' => $cart]);
        return redirect()->back()->with('success', 'Produit ajouté au panier !');
    }

    /**
     * Update the quantity of a product in the cart.
     */
    public function updateCart(Request $request, $productId)
    {
        $cart = session('cart', []);
        $quantity = (int) $request->input('quantity', 1);
        if ($quantity > 0) {
            $cart[$productId]['quantity'] = $quantity;
        } else {
            unset($cart[$productId]);
        }
        session(['cart' => $cart]);
        return redirect()->route('cart.show');
    }

    /**
     * Remove a product from the cart.
     */
    public function removeFromCart(Request $request, $productId)
    {
        $cart = session('cart', []);
        unset($cart[$productId]);
        session(['cart' => $cart]);
        return redirect()->route('cart.show');
    }

    /**
     * Show the checkout form.
     */
    public function checkoutShow(Request $request)
    {
        $cart = session('cart', []);
        if (empty($cart)) {
            return redirect()->route('cart.show')->with('error', 'Votre panier est vide.');
        }
        return view('checkout');
    }

    /**
     * Process the checkout form, create Order and OrderItems, clear cart, and redirect to confirmation.
     */
    public function checkoutProcess(Request $request)
    {
        $cart = session('cart', []);
        if (empty($cart)) {
            return redirect()->route('cart.show')->with('error', 'Votre panier est vide.');
        }
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
        ]);
        $total = 0;
        foreach ($cart as $productId => $item) {
            $product = \App\Models\Product::find($productId);
            if ($product) {
                $total += $product->price * $item['quantity'];
            }
        }
        $order = \App\Models\Order::create([
            'user_id' => Auth::check() ? Auth::id() : null,
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'address' => $validated['address'],
            'total' => $total,
            'status' => 'pending',
        ]);
        foreach ($cart as $productId => $item) {
            $product = \App\Models\Product::find($productId);
            if ($product) {
                \App\Models\OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'quantity' => $item['quantity'],
                    'price' => $product->price,
                ]);
            }
        }
        session()->forget('cart');
        return redirect()->route('order.confirmation', $order->id);
    }

    /**
     * Show the order confirmation page.
     */
    public function orderConfirmation($orderId)
    {
        $order = Order::with('items.product')->findOrFail($orderId);
        return view('order-confirmation', compact('order'));
    }
} 