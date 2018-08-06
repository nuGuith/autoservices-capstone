<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    public $timestamps = true;
    protected $table = 'problem';
    protected $primaryKey = 'problemid';
    protected $fillable = [
        'JobOrderID',
        'Problem',
        'isPerformed',
        'isActive'
    ];

    public function joborder() {
        return $this->belongsTo('App\JobOrder','JobOrderID');
    }

}
