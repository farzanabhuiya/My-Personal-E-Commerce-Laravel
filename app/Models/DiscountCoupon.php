<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscountCoupon extends Model
{
    use HasFactory;

    //DiscountCoupon model
public function isExpired()
{
    return $this->expires_at < now();
}
}
