<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyOrdersController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $orders = Order::where('user_id',$user->id)->get();
        return view('admin-panel.orders.main', compact('orders'));
    }
    public function showOrder($order_id)
    {
        $order = Order::find($order_id);
        return view('admin-panel.orders.show', compact('order'));
    }
}
