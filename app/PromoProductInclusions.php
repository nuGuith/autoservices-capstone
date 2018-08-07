<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromoProductInclusions extends Model
{
    public $timestamp = true;
    public $icrementing = false;
    protected $table = 'promo_product_inclusions';
    protected $primaryKey = null;
    protected $fillable = [
        'quantity',
        'isActive'
    ];

    public function promoheader(){
        return $this->belongsTo('App\PromoHeader', 'promoid');
    }

    public function product(){
        return $this->belongsTo('App\Product', 'productid');
    }
}
