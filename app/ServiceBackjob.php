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
        'BackJobID',
        'PersonnelPerformedID',
        'Cost',
        'Note',
        'isActive'
    ];

}
