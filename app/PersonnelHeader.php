<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonnelHeader extends Model
{
    public $timestamps = true;
    protected $table = 'personnel_header';
    protected $primaryKey = 'personnelid';
    protected $fillable = [
        'FirstName',
        'MiddleName',
        'LastName',
        'Position',
        'ContactNo',
        'CompleteAddress',
        'Barangay',
        'City',
        'Province',
        'isActive'
    ];

}
