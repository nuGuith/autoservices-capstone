<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutomobileModel extends Model
{
    public $timestamps = true;
    protected $table = 'automobile_model';
    protected $primaryKey = 'modelid';
    protected $fillable = [
        'modelid',
        'makeid',
        'model',
        'isActive'
    ];

    public function automobilemake(){
        return $this->belongsTo('App\AutomobileMake', 'makeid');
    }

    public function productvehicle(){
        return $this->hasMany('App\ProductVehicle', '');
    }
}

