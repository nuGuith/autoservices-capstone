<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductService extends Model
{
    public $timestamps = true;
    protected $table = 'product_service';
    protected $primaryKey = false;
    protected $fillable = [
        'productid',
        'serviceid',
        'price',
        'isActive'
    ];

    public function service()
    {
        return $this->belongsTo('App/Service','serviceid');
    }

    public function product()
    {
        return $this->belongsTo('App/Product','productid');
    }
}
