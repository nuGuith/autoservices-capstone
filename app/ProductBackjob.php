<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductBackjob extends Model
{   
    public $timestamp = true;
    protected $table = 'product_backjob';
    protected $primarykey = 'productbackjobid';
    protected $fillable = [
        'productbackjobid',
        'date',
        'cost',
        'note',
        'isActive'
    ];

    public function joborder(){
        return $this->belongsTo('App\JobOrder', 'joborderid');
    }

    public function productwarranty(){
        return $this->belongsTo('App\ProductWarranty', 'productwarrantyid');
    }
}
