<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // hasMany - обозначает - "имеет много ..." списков заказа
    // Связь с моделью OrderList M:1
    public function orderlist() {
        return $this->hasMany(OrderList::class);
    }
}
