<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicePrice extends Model
{
    public $timestamps = true;
    protected $table = 'service_price';
    protected $primaryKey = null;
    protected $fillable = [
        'ServiceID',
        'ModelID',
        'Price',
        'isActive'
    ];
}
