<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    public $timestamps = true;
    protected $table = 'complaint';
    protected $primaryKey = 'complaintid';
    protected $fillable = [
        'JobOrderID',
        'EstimateID',
        'Problem',
        'Diagnosis',
        'isResolved',
        'isActive'
    ];

    public function joborder() {
        return $this->belongsTo('App\JobOrder','JobOrderID');
    }
    public function estimate() {
        return $this->belongsTo('App\Estimate','EstimateID');
    }
}
