<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    public $timestamps = true;
    protected $table = 'process';
    protected $primaryKey = 'processid';
    protected $fillable = [
        'ServiceID',
        'ProcessName',
        'EstimatedTime',
        'isActive'
    ];

    public function service() {
        return $this->belongsTo('App\Service','ServiceID');
    }

}
