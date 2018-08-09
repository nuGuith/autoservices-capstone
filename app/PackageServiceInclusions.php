<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageServiceInclusions extends Model
{
    public $timestamps = true;
    public $incrementing = false;
    protected $table = 'package_service_inclusions';
    protected $primaryKey = null;
    protected $fillable = [
        'isActive'
    ];

    public function package(){
        return $this->belongsTo('App\PackageHeader', 'packageid');
    }
    
    public function service(){
        return $this->belongsTo('App\Service', 'serviceid');
    }
}
