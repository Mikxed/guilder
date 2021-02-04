<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerCharacter extends Model
{
    protected $fillable = [
        'name',
        'user_id',
        'realm_id',
        'class_id',
        'main',
        'role',
    ];
}
