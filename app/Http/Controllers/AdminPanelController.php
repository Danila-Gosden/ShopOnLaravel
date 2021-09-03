<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin-panel.orders.main', compact('orders'));
    }
}
