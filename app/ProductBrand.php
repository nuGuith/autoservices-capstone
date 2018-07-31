<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductBrand extends Model
{
    protected $table = 'product_brand';
    protected $primarykey = 'productbrandid';
    public $timestamps = true;
    protected $fillable = [
        'productbrandid',
        'brandname',
        'isActive'
    ];

    public function product()
    {
        return $this->hasMany('App/Product','productid');
    }
}
