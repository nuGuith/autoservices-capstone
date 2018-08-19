<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaintenanceChecklist extends Model
{   
    public $timestamps = true;
    protected $table = 'maintenance_checklist';
    protected $primaryKey = 'maintenancechecklistid';
    protected $fillable = [
        'maintenancechecklistid',
    	'maintenancecheckcategory',
        'maintenancecheckitem',
        'isActive'
    ];

    public function maintenance(){
        return $this->belongsTo('App\Maintenance','maintenanceid');
    }
}
