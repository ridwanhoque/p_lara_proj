<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BkashOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'currency',
        'amount',
        'invoice',
        'transaction_id',
        'status'
    ];

}
