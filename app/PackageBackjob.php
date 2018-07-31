<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageBackjob extends Model
{
    public $timestamp = true;
    protected $table = 'package_backjob';
    protected $primarykey = 'productbackjobid';
    protected $fillable = [
        'productbackjobid',
        'datetime',
        'cost',
        'note',
        'isActive'
    ];

    public function packagewarranty(){
        return $this->belongsTo('App\PackageWarranty', 'packagewarrantyid');
    }
}
