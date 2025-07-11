<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function chien()
    {
        $products = Product::where('category', 'chien')->get();
        return view('products-chien', compact('products'));
    }

    public function chat()
    {
        $products = Product::where('category', 'chat')->get();
        return view('products-chat', compact('products'));
    }

    public function oiseau()
    {
        $products = Product::where('category', 'oiseau')->get();
        return view('products-oiseau', compact('products'));
    }
} 