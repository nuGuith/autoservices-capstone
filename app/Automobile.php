<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Automobile extends Model
{
    public $timestamps = true;
    protected $table = 'automobile';
    protected $primaryKey = 'automobileid';
    protected $fillable = [
        'plateno',
        'mileage',
        'color',
        'chassisno',
        'isActive'
    ];

    public function automobilemodel(){
        return $this->belongsTo('App\AutomobileModel', 'modelid');
    }

    public function estimate(){
        return $this->hasMany('App\Estimate', 'estimateid');
    }
}
