<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    public $timestamps = true;
    protected $table = 'product_category';
    protected $primaryKey = 'productcategoryid';
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
