<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // hasMany - обозначает - заказ принадлежит одному клиенту
    // Связь с моделью Client M:1
    public function client() {
        return $this->belongsTo(Client::class);
    }
    // hasMany - обозначает - "имеется во многих" списках заказа
    // Связь с моделью Client M:1
    public function orderlist() {
        return $this->hasMany(OrderList::class);
    }
}
