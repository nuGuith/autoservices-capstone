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
        'inspectiontypeid',
    	'inspectionitem',
        'isActive'
    ];

    public function inspection(){
        return $this->belongsTo('App\Inspection','inspectionid');
    }
}
