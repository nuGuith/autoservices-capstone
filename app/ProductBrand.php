<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductBrand extends Model
{
    public $timestamps = false;
    protected $table = 'product_brand';
    protected $primaryKey = 'productbrandid';
    protected $fillable = [
        'brandname'
    ];

    public function product()
    {
        return $this->hasMany('App/Product','ProductID');
    }
}
