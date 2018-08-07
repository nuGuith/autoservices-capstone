<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductUnitType extends Model
{
    protected $table = 'product_unit_type';
    protected $primarykey = 'productunittypeid';
    public $timestamps = true;
    protected $fillable = [
        'productunittypeid',
        'unittypename',
        'unit',
        'unitcategory',
        'isActive'
    ];

    public function product()
    {
        return $this->hasMany('App/Product','productid');
    }
}
