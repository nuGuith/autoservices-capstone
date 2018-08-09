<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageWarranty extends Model
{
    public $timestamps = true;
    protected $table = 'package_warranty';
    protected $primaryKey = 'packagewarrantyid';
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
