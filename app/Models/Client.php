<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    // belongsTo - обозначает - принадлежит к таблице Order
    // Связь с моделью Order 1:M
    public function order() {
        return $this->hasMany(Order::class);
    }
}
