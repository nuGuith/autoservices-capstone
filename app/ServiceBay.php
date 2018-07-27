<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceBay extends Model {

    public $timestamps = false;
    protected $table = 'service_bay';
    protected $primaryKey = 'servicebayid';
    protected $fillable = ['servicebayid','servicebayname','description'];
    
}