<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CartIsNotEmpty
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if(!is_null(session()->get('order_id'))) {
            return $next($request);
        }
        else{
            session()->flash('message',  'Ваша корзина пустая!');
            return redirect()->route('home');
        }
    }
}
