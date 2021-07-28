<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guild;
use App\Realm;

class GuildController extends Controller
{
    public function getGuilds()
    {
        $guilds = Guild::select([
            'guilds.id',
            'guilds.name',
            'realms.name as realm'
        ])
        ->join('realms', 'realms.id', 'guilds.realm_id')
        ->get();
        return $guilds;
    }
    public function getRealms()
    {
        return Realm::all();
    }
}
