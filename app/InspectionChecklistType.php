<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InspectionChecklistType extends Model
{
    public $timestamps = true;
    protected $table = 'inspection_checklist_type';
    protected $primaryKey = 'inspectiontypeid';
    protected $fillable = [
        'inspectiontypename',
        'isActive'
    ];
}
