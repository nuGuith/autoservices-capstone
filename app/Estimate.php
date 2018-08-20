<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estimate extends Model
{
    public $timestamps = true;
    protected $primaryKey = 'estimateid';
    protected $table = 'estimate';
    protected $fillable = [
        'EstimateID',
        'AutomobileID',
        'InspectionID',
        'DiscountID',
        'isActive',
        'updated_at'
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
