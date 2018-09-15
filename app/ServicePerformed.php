<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicePerformed extends Model
{
    public $timestamps = true;
    protected $table = 'service_performed';
    protected $primaryKey = 'ServicePerformedID';
    protected $fillable = [
        'ServiceID',
        'JobOrderID',
        'EstimateID',
        'PersonnelPerformedID',
        'LaborCost',
        'isPerformed',
        'isActive'
    ];

    public function service() {
        return $this->belongsTo('App\Service','ServiceID');
    }

    public function joborder() {
        return $this->belongsTo('App\JobOrder','JobOrderID');
    }

    public function servicewarranty() {
        return $this->hasOne('App\ServiceWarranty','ServiceWarrantyID');
    }

    public function estimate() {
        return $this->belongsTo('App\Estimate','EstimateID');
    }

}
