<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['total_amount', 'customer_id'];
    use HasFactory;
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}
