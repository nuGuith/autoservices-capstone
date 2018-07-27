<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    public $timestamps = false;
    protected $table = 'product_type';
    protected $primaryKey = 'producttypeid';
    protected $fillable = [
        'productcategoryid',
        'producttypename',
        'isActive'
    ];

    public function productcategory()
    {
        return $this->belongsTo('App/ProductCategory', 'ProductCategoryID');
    }

    public function product()
    {
        return $this->hasMany('App/Product','ProductID');
    }
}
