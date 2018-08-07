<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDamaged extends Model
{
    public $timestamp = true;
    protected $table = 'product_damaged';
    protected $primarykey = 'productdamagedid';
    protected $fillable = [
        'productdamagedid',
        'state',
        'quantity',
        'date',
        'remarks',
        'isActive'
    ];

    public function product(){
        return $this->belongsTo('App\Product', 'productid');
    }
}
