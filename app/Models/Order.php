<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Order extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }

    public function getFullPrice()
    {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->getPriceForCount();
        }
        return $sum;
    }

    public function saveOrder($name, $phone)
    {
        if ($this->status == 'not ordered') {
            $this->customer_name = $name;
            $this->customer_phone = $phone;
            $this->status = 'Created';
            $this->save();
            session()->forget('order_id');
            return true;
        } else {
            return false;
        }
    }
    public function saveUserId(){
        if(!is_null(Auth::user())) {
            $user = Auth::user();
            $this->user_id = $user->id;
            $this->save();
        }
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
