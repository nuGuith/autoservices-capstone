<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InspectionType extends Model
{
    public $timestamps = true;
    protected $table = 'inspection_type';
    protected $primaryKey = 'inspectiontypeid';
    protected $fillable = [
        'inspectiontypename',
        'isActive'
    ];
}
