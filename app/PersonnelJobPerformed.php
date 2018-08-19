<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonnelJobPerformed extends Model
{
    public $timestamps = true;
    protected $table = 'personnel_job_performed';
    protected $primaryKey = 'personnelperformedid';
    protected $fillable = [
        'JobOrderID',
        'PersonnelJobID',
        'isActive'
    ];

    public function joborder (){
        return $this->belongsTo('App\JobOrder','JobOrderID');
    }

    public function personneljob (){
        return $this->belongsTo('App\PersonnelJob','PersonnelJobID');
    }
}
