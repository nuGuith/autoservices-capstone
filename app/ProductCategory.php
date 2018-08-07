<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
	public $timestamps = false;
    protected $table = 'product_category';
    protected $primaryKey = 'productcategoryid';
    protected $fillable = [
        'categoryname'
    ];
    
    public function producttype()
    {
        return $this->hasMany('App/ProductType', 'ProductTypeID');
    }
}
