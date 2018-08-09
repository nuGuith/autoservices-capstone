<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductVehicle extends Model
{
    public $timestamps = true;
    protected $table = 'product_vehicle';
    protected $primaryKey = false;
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
