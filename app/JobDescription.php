<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobDescription extends Model
{
    public $timestamps = true;
    protected $table = 'job_description';
    protected $primaryKey = 'jobdescriptionid';
    protected $fillable = [
        'JobDescription',
        'isActive'
    ];

    public function personneljob(){
        return $this->hasMany('App\PersonnelJob','JobDescriptionID');
    }
    
}
