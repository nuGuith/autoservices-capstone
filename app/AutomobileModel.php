<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutomobileModel extends Model
{
    public $timestamp = true;
    protected $table = 'automobile_model';
    protected $primarykey = 'modelid';
    protected $fillable = [
        'modelid',
        'model',
        'isActive'
    ];

    public function automobilemake(){
        return $this->belongsTo('App\AutomobileMake', 'makeid');
    }
}
