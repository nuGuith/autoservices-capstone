<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InspectionHeader extends Model
{
    public $timestamps = true;
    protected $table = 'inspection_header';
    protected $primaryKey = 'inspectionid';
    protected $fillable = [
        'JobOrderID',
        'CustomerID',
        'AutomobileID',
        'Date',
        'isActive'
    ];

    public function job() {
        return $this->belongsTo('App\JobOrder','JobOrderID');
    }
}
