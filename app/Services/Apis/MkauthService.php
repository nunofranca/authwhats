<?php

namespace App\Services\Apis;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class MkauthService implements MkauthServiceInterface
{

    public function getClients()
    {
        return Http::get("http://api:".Auth::user()->servers->first()->api_key."@".Auth::user()->servers->first()->address."/api/cliente/listAll")->json();
    }

    public function getClientByLogin($login)
    {
        return Http::get("http://api:".Auth::user()->servers->first()->api_key."@".Auth::user()->servers->first()->address."/api/cliente/list/$login")->json();

    }

    public function getTitles()
    {

        return Http::get("http://api:".Auth::user()->servers->first()->api_key."@".Auth::user()->servers->first()->address."/api/titulo/listAll")->json();
    }

}
