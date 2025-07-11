<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $bestsellers = Product::orderBy('price', 'desc')->take(8)->get();
        return view('index', compact('bestsellers'));
    }
} 