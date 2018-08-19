<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobSchedule extends Model
{
    public $timestamps = true;
    protected $table = 'job_schedule';
    protected $primaryKey = 'scheduleid';
    protected $fillable = [
        'ProcessID',
        'JobOrderID',
        'PersonnelID',
        'Status',
        'StartDateTime',
        'FinishDateTime',
        'isActive'
    ];

    public function process() {
        return $this->belongsTo('App\Process','ProcessID');
    }

    public function joborder() {
        return $this->belongsTo('App\JobOrder','JobOrderID');
    }

    public function personnelheader() {
        return $this->belongsTo('App\PersonnelHeader','PersonnelID');
    }
}
