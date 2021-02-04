<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RealmPost extends Model
{
    protected $fillable = [
        'user_id',
        'realm_id',
        'comment',
    ];

}
