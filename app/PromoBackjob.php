<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromoBackjob extends Model
{
    public $timestamp = true;
    protected $table = 'promo_bakcjob';
    protected $primarykey = 'promobackjobid';
    protected $fillable = [
        'promobackjobid',
        'datetime',
        'cost',
        'note',
        'isActive'
    ];

    public function productwarranty(){
        return $this->belongsTo('App\ProductWarranty', 'productwarrantyid');
    }
}
