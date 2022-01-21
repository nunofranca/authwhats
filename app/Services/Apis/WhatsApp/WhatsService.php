<?php

namespace App\Services\Apis\WhatsApp;

use Illuminate\Support\Facades\Http;

class WhatsService implements WhatsServiceInterface
{


    public function __construct()
    {

    }

    public function sendSessionMessage($whatsappNumber)
    {
//        dd(config('api.whats.authorization'));

        Http::withToken(config('api.whats.authorization'))
            ->post(config('api.whats.endpoint') . __FUNCTION__ . "/" . $whatsappNumber. "?messageText=Mensagem de Teste da api");
    }
}
