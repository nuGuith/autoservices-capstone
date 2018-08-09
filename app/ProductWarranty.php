<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductWarranty extends Model
{
    public $timestamps = true;
    protected $table = 'product_warranty';
    protected $primaryKey = 'productwarrantyid';
    protected $fillable = [
        'productwarrantyid',
        'duration',
        'durationmode',
        'isActive'
    ];

    public function servicewarranty(){
        return $this->belongsTo('App\ServiceWarranty', 'servicewarrantyid');
    }

    public function sales(){
        return $this->belongsTo('App\Sales', 'salesid');
    }
}
