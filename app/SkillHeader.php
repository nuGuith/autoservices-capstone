<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillHeader extends Model
{
    public $timestamps = true;
    protected $table = 'skill_header';
    protected $primaryKey = 'skillid';
    protected $fillable = [
        'Skill',
        'isActive'
    ];

}
