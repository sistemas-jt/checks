<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    use HasFactory; 

    protected $table='checks'; 
    public $timestamps = true;

    protected $fillable = [
        'customer_name',
        'customer_business_name',
        'salesman',
        'sale_condition',
        'payment_condition',
        'delivery_date',
        'delivery_address'
    ];

}
