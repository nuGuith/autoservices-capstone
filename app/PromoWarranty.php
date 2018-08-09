<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromoWarranty extends Model
{
    public $timestamps = true;
    protected $table = 'promo_warranty';
    protected $primaryKey = 'promowarrantyid';
    protected $fillable = [
        'promowarrantyid',
        'durationmode',
        'duration',
        'isActive'
    ];

    public function promoheader(){
        return $this->belongsTo('App\PromoHeader', 'promoid');
    }

    public function promobackjob(){
        return $this->hasMany('App\PromoWarranty', 'promowarrantyid');
    }
}
