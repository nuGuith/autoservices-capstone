<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = true;
    protected $table = 'customer';
    protected $primaryKey = 'customerid';
    protected $fillable = [
        'customerid',
        'firstname',
        'middlename',
        'lastname',
        'contactnumber',
        'lotno',
        'streetname',
        'barangay',
        'city',
        'emailaddress',
        'isActive'
    ];

    public function estimate(){
        return $this->hasMany('App\Estimate', 'estimateid');
    }
}
