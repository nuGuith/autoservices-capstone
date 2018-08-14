<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromoProductInclusions extends Model
{
    public $timestamps = true;
    public $incrementing = false;
    protected $table = 'promo_product_inclusions';
    protected $primaryKey = null;
    protected $fillable = [
        'promoid',
        'productid',
        'quantity',
        'isFree',
        'isActive'
    ];

    public function promoheader(){
        return $this->belongsTo('App\PromoHeader', 'promoid');
    }

    public function product(){
        return $this->belongsTo('App\Product', 'productid');
    }
}
