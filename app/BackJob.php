<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BackJob extends Model
{
    public $timestamps = true;
    protected $table = 'job_order_backjob';
    protected $primaryKey = 'backjobid';
    protected $fillable = [
        'JobOrderID',
        'ServiceBayID',
        'UserID',
        'ServiceBayID',
        'Status',
        'JobStartDate',
        'JobEndDate',
        'Diagnosis',
        'JobDuration',
        'Cost',
        'isActive',
        'updated_at'
    ];
}
