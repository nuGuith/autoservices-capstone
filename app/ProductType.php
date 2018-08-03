<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    public $timestamp = true;
    protected $table = 'product_type';
    protected $primarykey = 'producttypeid';
    protected $fillable = [
        'producttypeid',
        'producttypename',
        'isActive'
    ];
    
    public function productcategory()
    {
        return $this->hasMany('App/ProductCategory','productcategoryid');
    }

    public function product()
    {
        return $this->hasMany('App/Product','productid');
    }
}