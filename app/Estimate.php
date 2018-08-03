<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estimate extends Model
{
    public $timestamp = true;
    protected $primarykey = 'estimateid';
    protected $table = 'estimate';
    protected $fillable = [
        'estimateid',
        'isActive'
    ];
    
    public function customer(){
        return $this->belongsTo('App\Customer', 'customerid');
    }

    public function automobile(){
        return $this->belongsTo('App\Automobile', 'automobileid');
    }

    public function inspection(){
        return $this->belongsTo('App\Inspection', 'inspectionid');
    }
}