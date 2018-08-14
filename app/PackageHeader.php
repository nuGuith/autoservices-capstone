<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageHeader extends Model
{
    public $timestamps = true;
    protected $table = 'package_header';
    protected $primaryKey = 'packageid';
    protected $fillable = [
        'packageid',
        'packagename',
        'price',
        'warrantydurationmode',
        'warrantyduration',
        'isActive'
    ];

    public function packagewarranty(){
        return $this->hasMany('App\PackageWarranty', 'packagewarrantyid');
    }

    public function joborder(){
        return $this->hasMany('App\JobOrder', 'joborderid');
    }

    public function packageserviceinclusions(){
        return $this->hasMany('App\PackageServiceInclusions', '');
    }

    public function packageproductinclusions(){
        return $this->hasMany('App\PackageProductInclusions', '');
    }
}
