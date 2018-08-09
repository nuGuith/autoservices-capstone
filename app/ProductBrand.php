<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductBrand extends Model
{
    public $timestamps = true;
    protected $table = 'product_brand';
    protected $primaryKey = 'productbrandid';
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
