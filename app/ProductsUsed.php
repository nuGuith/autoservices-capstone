<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsUsed extends Model
{
    public $timestamps = true;
    protected $table = 'product_used';
    protected $fillable = [
        'joborderid',
        'estimateid',
        'salesid',
        'serviceperformedid',
        'productid',
        'estimateid',
        'dateused',
        'quantity',
        'subtotal',
        'isCustomerProvided',
        'isActive'
    ];

    public function sales(){
        return $this->belongsTo('App\Sales', 'salesid');
    }

    public function joborder(){
        return $this->belongsTo('App\JobOrder', 'joborderid');
    }
}
