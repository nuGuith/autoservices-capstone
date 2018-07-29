<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutomobileModel extends Model
{
    public $timestamps = false;
    protected $table = 'automobile_model';
    protected $primaryKey = 'modelid';
    protected $fillable = [
        'makeid',
        'model'
    ];

    public function automobilemake(){
        return $this->belongsTo('App\AutomobileMake', 'MakeID');
    }
}
