<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutomobileMake extends Model
{
    public $timestamps = true;
    protected $table = 'automobile_make';
    protected $primaryKey = 'makeid';
    protected $fillable = [
        'makeid',
        'make',
        'isActive'
    ];

    /*public function automobilemodels(){
        return $this->hasOne('App\AutomobileModel', 'modelid');
    }*/
}
