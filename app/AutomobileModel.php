<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutomobileModel extends Model
{
    public $timestamp = true;
    protected $table = 'automobile_model';
    protected $primaryKey = 'modelid';
    protected $fillable = [
        'modelid',
        'makeid',
        'model',
        'isActive'
    ];

    /*public function automobilemakes(){
        return $this->belongsTo('App\AutomobileMake', 'makeid');
    }

    public function productvehicles(){
        return $this->hasMany('App\ProductVehicle', '');
    }

    public function automobiles(){
        return $this->hasOne('App\Automobile', 'plateno');
    }
    
    public function estimates(){
        return $this->hasManyThrough('App\Estimate', 'App\Automobile');
    }*/
}

