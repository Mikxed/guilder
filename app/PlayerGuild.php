<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerGuild extends Model
{
    protected $fillable = [
        'user_id',
        'guild_id',
        'guild_status',
    ];
}
