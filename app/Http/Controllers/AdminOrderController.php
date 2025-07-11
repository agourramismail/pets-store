<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class AdminOrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('items.product')->orderBy('created_at', 'desc')->get();
        return view('admin.orders', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::with('items.product')->findOrFail($id);
        return view('admin.order-show', compact('order'));
    }

    public static function dashboardStats()
    {
        $userCount = \App\Models\User::count();
        $productCount = \App\Models\Product::count();
        $orderCount = \App\Models\Order::count();
        return compact('userCount', 'productCount', 'orderCount');
    }
} 