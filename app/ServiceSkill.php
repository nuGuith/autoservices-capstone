<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceSkill extends Model
{
    public $timestamps = true;
    protected $table = 'service_skill';
    protected $primaryKey = null;
    protected $fillable = [
        'ServiceID'
        'SkillID',
        'isActive'
    ];
}
