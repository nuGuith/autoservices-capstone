<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{   
    public $timestamp = true;
    protected $table = 'payment';
    protected $primarykey = 'paymentid';
    protected $fillable = [
        'paymentid',
        'totalcharge',
        'totalpayment',
        'date',
        'isActive'
    ];

    public function joborder(){
        return $this->belongsTo('App\JobOrder', 'joborderid');
    }
}
