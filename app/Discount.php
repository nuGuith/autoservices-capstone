<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    public $timestamps = true;
    protected $table = 'discount';
    protected $primaryKey = 'discountid';
    protected $fillable = [
        'discountid',
        'discountname',
        'discountrate',
        'isActive'
    ];
}
