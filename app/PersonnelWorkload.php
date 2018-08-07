<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonnelWorkload extends Model
{
    public $timestamps = true;
    protected $table = 'personnel_workload';
    protected $primaryKey = 'datetime';
    protected $fillable = [
        'PersonnelID',
        'WorkStartDateTime',
        'InitialWorkload',
        'ActualWorkload',
        'isActive'
    ];

    public function personnelheader() {
        return $this->belongsTo('App\PersonnelHeader','PersonnelID');
    }

}
