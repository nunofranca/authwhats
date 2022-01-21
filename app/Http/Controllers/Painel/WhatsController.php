<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use App\Services\Apis\WhatsApp\WhatsServiceInterface;
use Illuminate\Http\Request;

class WhatsController extends Controller
{

    private $whatsService;

    public function __construct(WhatsServiceInterface $whatsService)
    {
        $this->whatsService = $whatsService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendMessage($whatsappNumber)
    {
        $this->whatsService->sendSessionMessage($whatsappNumber);
    }
}
