<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutomobileMake extends Model
{
    public $timestamp = true;
    protected $table = 'automobile_make';
    protected $primarykey = 'makeid';
    protected $fillable = [
        'makeid',
        'make',
        'isActive'
    ];

    /*public function automobilemodels(){
        return $this->hasOne('App\AutomobileModel', 'modelid');
    }*/
}
