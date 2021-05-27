<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'item_name',
        'restaurant_id',
        'customer_name',
        'mobile',
        'address',
        'quantity',
        'payment',
        'cost',
        'coupon',
        'admin_action',
        'seller_action',
        'status',
    ];
}
