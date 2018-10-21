<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductBackjob extends Model
{   
    public $timestamps = true;
    protected $table = 'product_backjob';
    protected $primaryKey = 'productbackjobid';
    protected $fillable = [
        'BackJobID',
        'ProductUsedID',
        'ServicePerformedID',
        'Quantity',
        'QuantityUsed',
        'Cost'
    ];
}
