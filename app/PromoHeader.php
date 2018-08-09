<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromoHeader extends Model
{
    public $timestamps = true;
    protected $table = 'promo_header';
    protected $primaryKey = 'promoid';
    protected $fillable = [
        'promoid',
        'promoname',
        'duration',
        'durationmode',
        'price',
        'isActive'
    ];

    public function promowarranty(){
        return $this->hasMany('App\PromoWarranty', 'promowarrantyid');
    }

    public function joborder(){
        return $this->hasMany('App\JobOrder', 'joborderid');
    }

    public function promoserviceinclusions(){
        return $this->hasMany('App\PromoServiceInclusions', '');
    }

    public function promoproductinclusions(){
        return $this->hasMany('App\PromoProductInclusions', '');
    }
}
