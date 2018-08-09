<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    public $timestamps = true;
    protected $table = 'product_type';
    protected $primaryKey = 'producttypeid';
    protected $fillable = [
        'productcategoryid',
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
