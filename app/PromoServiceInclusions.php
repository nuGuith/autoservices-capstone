<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromoServiceInclusions extends Model
{
    public $timestamps = true;
    public $incrementing = false;
    protected $table = 'promo_service_inclusions';
    protected $primaryKey = null;
    protected $fillable =[
        'productid',
        'serviceid',
        'isFree',
        'isActive'
    ];

    public function promoheader(){
        return $this->belongsTo('App\PromoHeader', 'promoid');
    }

    public function service(){
        return $this->belongsTo('App\Service', 'serviceid');
    }
}
