<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InspectionChecklist extends Model
{
    public $timestamps = true;
    protected $table = 'inspection_checklist';
    protected $primaryKey = 'inspectionchecklistid';
    protected $fillable = [
        'inspectionchecklistid',
    	'inspectionitem',
        'inspectiontype',
        'isActive'
    ];

    public function inspection(){
        return $this->belongsTo('App\Inspection','inspectionid');
    }
}
