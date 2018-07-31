<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageProductInclusions extends Model
{
    public $timestamp = true;
    public $incrementing = false;
    protected $table = 'package_product_inclusions';
    protected $primaryKey = null;
    protected $fillable = [
        'quantity',
        'isActive'
    ];

    public function package(){
        return $this->belongsTo('App\PackageHeader', 'packageid');
    }

    public function product(){
        return $this->belongsTo('App\Product', 'productid');
    }
}
