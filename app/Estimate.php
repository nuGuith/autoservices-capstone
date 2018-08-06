<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estimate extends Model
{
    public $timestamp = true;
    protected $primaryKey = 'estimateid';
    protected $table = 'estimate';
    protected $fillable = [
        'estimateid',
        'customerid',
        'plateno',
        'inspectionid',
        'isActive'
    ];
    
    /*public function customers(){
        return $this->belongsTo('App\Customer', 'customerid');
    }

    public function automobiles(){
        return $this->belongsTo(Automobile::class);
    }

    public function inspections(){
        return $this->belongsTo('App\Inspection', 'inspectionid');
    }*/
}
