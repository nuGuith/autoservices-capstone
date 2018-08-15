<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = true;
    protected $table = 'customer';
    protected $primaryKey = 'customerid';
    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'ContactNo',
        'pwd_sc_no',
        'CompleteAddress',
        'barangay',
        'city',
        'province',
        'emailaddress',
        'isActive'
    ];

    public function estimate(){
        return $this->hasMany('App\Estimate', 'estimateid');
    }
}
