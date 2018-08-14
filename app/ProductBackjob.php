<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductBackjob extends Model
{   
    public $timestamps = true;
    protected $table = 'product_backjob';
    protected $primaryKey = 'productbackjobid';
    protected $fillable = [
        'joborderid',
        'productid'
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
