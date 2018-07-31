<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    public $timestamp = true;
    protected $table = 'product_application';
    protected $primarykey = 'false';
    protected $fillable = [
        'productid',
        'make',
        'model',
        'year',
        'isActive'
    ];

    public function product()
    {
        return $this->hasMany('App/Product','productid');
    }
}
