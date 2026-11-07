<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orderlist extends Model
{
    // belongsTo - обозначает - принадлежит к таблице Order
    // Связь с моделью Order 1:M
    public function order() {
        return $this->belongsTo(Order::class);
    }
    // belongsTo - обозначает - принадлежит к таблице Product
    // Связь с моделью Product 1:M
    public function product() {
        return $this->belongsTo(Product::class);
    }
}
