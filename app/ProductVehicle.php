<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductVehicle extends Model
{
    protected $table = 'product_vehicle';
    protected $primarykey = false;
    public $timestamps = true;
    protected $fillable = [
        'productid',
        'modelid',
        'year',
        'isActive'
    ];

    public function automobilemodel()
    {
        return $this->belongsTo('App/AutomobileModel','ModelID');
    }

    public function product()
    {
        return $this->belongsTo('App/Product','ProductID');
    }
}
