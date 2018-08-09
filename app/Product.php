<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'productid';
    public $timestamps = true;
    protected $fillable = [
        'productid',
        'productname',
        'application',
        'description',
        'price',
        'size',
        'expirydate',
        'isActive'
    ];

    public function producttype()
    {
        return $this->belongsTo('App/ProductType','producttypeid');
    }

    public function productbrand()
    {
        return $this->belongsTo('App/ProductBrand', 'productbrandid');
    }

    public function productunittype()
    {
        return $this->belongsTo('App/ProductUnitType','productunittypeid');
    }

    public function productvehicle()
    {
        return $this->hasMany('App/ProductVehicle','');
    }

    public function productservice()
    {
        return $this->hasMany('App/ProductService','');
    }

    public function productdamaged(){
        return $this->hasMany('App\ProductDamaged', 'productdamagedid');
    }

    public function packageproductinclusions(){
        return $this->hasMany('App\PackageProductInclusions', '');
    }

    public function promoproductinclusions(){
        return $this->hasMany('App\PromoProductInclusions', '');
    }
}
