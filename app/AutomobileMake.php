<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutomobileMake extends Model
{
    public $timestamps = false;
    protected $table = 'automobile_make';
    protected $primaryKey = 'makeid';
    protected $fillable = [
        'make'
    ];

    public function automobilemodel(){
        return $this->hasMany('App\AutomobileModel', 'ModelID');
    }
}
