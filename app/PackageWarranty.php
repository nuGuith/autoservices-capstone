<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageWarranty extends Model
{
    public $timestamp = true;
    protected $table = 'package_warranty';
    protected $primarykey = 'packagewarrantyid';
    protected $fillable = [
        'packagewarrantyid',
        'durationmode',
        'duration',
        'isActive'
    ];

    public function packageheader(){
        return $this->belongsTo('App\PackageHeader', 'packageid');
    }

    public function packagebackjob(){
        return $this->hasMany('App\PackageBackJob', 'packagebackjobid');
    }
}
