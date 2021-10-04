<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartRequest;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $order_id = session('order_id');
        if (is_null($order_id)) {
            $order = Order::create();
            $order->saveUserId();
            session(['order_id' => $order->id]);
        } else {
            $order = Order::findOrFail($order_id);
        }
        return view('cart.main', compact('order'));
    }

    /**
     * @param $product_id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addProduct($product_id)
    {
        $order_id = session('order_id');
        if (is_null($order_id)) {
            $order = Order::create();
            $order->saveUserId();
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
        session()->flash('added',  'Продукт Добавлен!');
        return redirect()->route('cart');
    }

    /**
     * @param $product_id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function removeProduct($product_id)
    {
        $order_id = session('order_id');
        if (is_null($order_id)) {
            $order = Order::create();
            $order->saveUserId();
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
            session()->flash('removed',  'Продукт Удалён!');
        }
        return redirect()->route('cart');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|void
     */
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

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function cartFinish(CartRequest $request)
    {

        $order_id = session('order_id');
        if (is_null($order_id)) {
            return redirect()->route('home');
        } else {
            $order = Order::find($order_id);
            $success = $order->saveOrder($request->name, $request->phone);
            if ($success){
                session()->flash('message',  'Ваш заказ в обработке!');
            }
            else{
                session()->flash('message',  'Произошла ошибка в оформлении заказа!');
            }
            return redirect()->route('home');
        }
    }


}
