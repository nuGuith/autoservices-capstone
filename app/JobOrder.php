<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobOrder extends Model
{
    public $timestamps = true;
    protected $table = 'job_order';
    protected $primaryKey = 'joborderid';
    protected $fillable = [
        'EstimateID',
        'CustomerID',
        'AutomobileID',
        'InspectionID',
        'PersonnelPerformedID',
        'ServiceBayID',
        'PromoID',
        'PackageID',
        'DiscountID',
        'UserID',
        'Status',
        'Terms_Agreement',
        'Agreement_Timestamp',
        'Release_Timestamp',
        'LaborCharge',
        'LaborDiscount_Rate',
        'JobDuration',
        'TotalAmountDue',
        'isActive',
        'updated_at'
    ];

    public function estimate (){
        return $this->belongsTo('App\Estimate','EstimateID');
    }

    public function personneljobperformed (){
        return $this->belongsTo('App\PersonnelJobPerformed','PersonnelPerformedID');
    }
    
    public function servicebay (){
        return $this->belongsTo('App\ServiceBay','ServiceBayID');
    }
    
    public function promo (){
        return $this->belongsTo('App\Promo','PromoID');
    }
    
    public function package (){
        return $this->belongsTo('App\Package','PackageID');
    }
    
    public function discount (){
        return $this->belongsTo('App\Discount','DiscountID');
    }
    
    public function user (){
        return $this->belongsTo('App\User','UserID');
    }
}
