<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin-panel.orders.main', compact('orders'));
    }

    public function showOrder($order_id)
    {
        $order = Order::find($order_id);
        return view('admin-panel.orders.show', compact('order'));
    }
}
