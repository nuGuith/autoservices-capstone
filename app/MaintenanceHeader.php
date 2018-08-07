<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaintenanceHeader extends Model
{
    public $timestamps = true;
    protected $table = 'maintenance_header';
    protected $primaryKey = 'maintenanceid';
    protected $fillable = [
        'JobOrderID',
        'Mileage',
        'isActive'
    ];

    public function joborder(){
        return $this->belongsTo('App\JobOrder','JobOrderID');
    }

}
