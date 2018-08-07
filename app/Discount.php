<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    public $timestamp = true;
    protected $table = 'discount';
    protected $primarykey = 'discountid';
    protected $fillable = [
        'discountid',
        'discountname',
        'discountrate',
        'discounttype',
        'isActive'
    ];
}
