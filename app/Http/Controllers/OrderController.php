<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $order = request('order') || 'asc' ? 'desc' : 'asc';
        $orders = Order::query();
        return view('orders', ['orders' => $orders->paginate(20), 'order' => $order]);
    }
}
