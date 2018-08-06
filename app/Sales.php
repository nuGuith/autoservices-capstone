<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    public $timestamps = true;
    protected $table = 'sales';
    protected $primaryKey = 'salesid';
    protected $fillable = [
        'SalesPrice',
        'MarkupPrice',
        'Quantity',
        'Date',
        'isActive'
    ];
}
