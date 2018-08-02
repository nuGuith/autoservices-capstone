<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductService extends Model
{
    protected $table = 'product_service';
    protected $primarykey = false;
    public $timestamps = true;
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
