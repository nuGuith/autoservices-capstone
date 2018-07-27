<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductUnitType extends Model
{
    public $timestamps = false;
    protected $table = 'product_unit_type';
    protected $primaryKey = 'productunittypeid';
    protected $fillable = [
        'unittypename',
        'unit',
        'size'
    ];

    public function product()
    {
        return $this->hasMany('App/Product','ProductID');
    }
}
