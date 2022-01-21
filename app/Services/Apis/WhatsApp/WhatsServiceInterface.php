<?php

namespace App\Services\Apis\WhatsApp;

interface WhatsServiceInterface
{
    public function sendSessionMessage($whatsappNumber);
}
