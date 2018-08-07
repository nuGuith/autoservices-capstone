<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonnelJob extends Model
{
    public $timestamps = true;
    protected $table = 'personnel_job';
    protected $primaryKey = 'personneljobid';
    protected $fillable = [
        'PersonnelID',
        'JobDescriptionID',
        'isActive'
    ];

    public function personnelheader (){
        return $this->hasOne('App\PersonnelHeader','PersonnelID');
    }

    public function jobdescription (){
        return $this->hasOne('App\JobDescription','JobDescriptionID');
    }
}
