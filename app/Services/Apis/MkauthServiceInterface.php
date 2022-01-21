<?php

namespace App\Services\Apis;

interface MkauthServiceInterface
{
    public function getClients();

    public function getClientByLogin($login);

    public function getTitles();
}
