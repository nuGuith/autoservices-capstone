<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceBay extends Model {

    public $timestamps = true;
    protected $table = 'service_bay';
    protected $primaryKey = 'servicebayid';
    protected $fillable = [
        'servicebayname',
        'description',
        'isActive'
    ];
    
}