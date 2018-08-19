<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Automobile extends Model
{
    public $timestamps = true;
    protected $table = 'automobile';
    protected $primaryKey = 'automobileid';
    protected $fillable = [
        'customerid',
        'plateno',
        'modelid',
        'transmission',
        'year',
        'mileage',
        'color',
        'chassisno',
        'isActive'
    ];

    /*public function automobilemodels(){
        return $this->belongsTo(AutomobileModel::class);
    }

    public function estimates(){
        return $this->hasMany(Estimate::class);
    }*/
}
