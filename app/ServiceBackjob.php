<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceBackjob extends Model
{
    public $timestamps = true;
    protected $table = 'service_backjob';
    protected $primaryKey = 'servicebackjobid';
    protected $fillable = [
        'ServicePerformedID',
        'ServiceWarrantyID',
        'DateTime',
        'Cost',
        'Note',
        'isActive'
    ];

    public function serviceperformed() {
        return $this->belongsTo('App\ServicePerformed','ServicePerformedID');
    }

    public function servicewarranty() {
        return $this->hasOne('App\ServiceWarranty','ServiceWarrantyID');
    }

}
