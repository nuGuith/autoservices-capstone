<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    public $timestamps = true;
    protected $table = 'inspection';
    protected $fillable = [
    	'InspectionChecklistID',
        'isWorking',
        'hasInventory',
        'Condition',
        'Remarks',
        'isActive'
    ];

    public function inspectionchecklist(){
        return $this->belongsTo('App\InspectionChecklist','InspectionChecklistID');
    }
}
