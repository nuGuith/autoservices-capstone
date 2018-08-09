<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductUnitType extends Model
{
    public $timestamps = true;
    protected $table = 'product_unit_type';
    protected $primaryKey = 'productunittypeid';
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
