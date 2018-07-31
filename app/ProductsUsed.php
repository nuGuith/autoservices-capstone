<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsUsed extends Model
{
    public $timestamp = true;
    protected $table = 'product_used';
    protected $primarykey = null;
    protected $fillable = [
        'dateused',
        'subtotal',
        'isActive'
    ];

    public function sales(){
        return $this->belongsTo('App\Sales', 'salesid');
    }

    public function joborder(){
        return $this->belongsTo('App\JobOrder', 'joborderid');
    }
}
