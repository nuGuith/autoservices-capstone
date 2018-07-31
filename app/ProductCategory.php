<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = 'product_category';
    protected $primarykey = 'productcategoryid';
    public $timestamps = true;
    protected $fillable = [
        'productcategoryid',
        'categoryname',
        'isActive'
    ];
    
    public function producttype()
    {
        return $this->hasMany('App/ProductType', 'producttypeid');
    }
}
