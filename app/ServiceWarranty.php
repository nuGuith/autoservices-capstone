<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceWarranty extends Model
{
    public $timestamps = true;
    protected $table = 'service_warranty';
    protected $primaryKey = 'servicewarrantyid';
    protected $fillable = [
        'JobOrderID',
        'Duration',
        'DurationMode',
        'isActive'
    ];

    public function joborder() {
        return $this->belongsTo('App\JobOrder','JobOrderID');
    }

}
