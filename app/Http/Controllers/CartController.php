<?php

namespace App\Http\Controllers;

use App\Models\Order;

class CartController extends Controller
{
    public function index()
    {
        $order_id = session('order_id');
        if (is_null($order_id)) {
            $order = Order::create();
            session(['order_id' => $order->id]);
        } else {
            $order = Order::findOrFail($order_id);
        }
        return view('cart.main', compact('order'));
    }

    public function addProduct($product_id)
    {
        $order_id = session('order_id');
        if (is_null($order_id)) {
            $order = Order::create();
            session(['order_id' => $order->id]);
        } else {
            $order = Order::find($order_id);
        }
        if ($order->products->contains($product_id)) {
            $pivotRow = $order->products()->where('product_id', $product_id)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();
        } else {
            $order->products()->attach($product_id);
        }
        return redirect()->route('cart');
    }

    public function removeProduct($product_id)
    {
        $order_id = session('order_id');
        if (is_null($order_id)) {
            $order = Order::create();
            session(['order_id' => $order->id]);
        } else {
            $order = Order::find($order_id);
        }
        if ($order->products->contains($product_id)) {
            $pivotRow = $order->products()->where('product_id', $product_id)->first()->pivot;
            if ($pivotRow->count < 1) {
                $order->products()->detach($product_id);
            } else {
                $pivotRow->count--;
                $pivotRow->update();
            }
        }
        return redirect()->route('cart');
    }


    public function cartConfirm()
    {
        $order_id = session('order_id');
        if (is_null($order_id)) {
            redirect()->route('home');
        } else {
            $order = Order::find($order_id);
            return view('order.main', compact('order'));
        }
    }

    public function cartFinish()
    {

    }


}
