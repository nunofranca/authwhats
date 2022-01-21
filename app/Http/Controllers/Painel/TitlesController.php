<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use App\Services\Apis\MkauthServiceInterface;
use App\Services\Apis\WhatsApp\WhatsServiceInterface;
use Illuminate\Http\Request;

class TitlesController extends Controller
{
    private $mkauthService;
    private $whatsService;
    public function __construct(MkauthServiceInterface $mkauthService, WhatsServiceInterface $whatsService)
    {
        $this->mkauthService = $mkauthService;
        $this->whatsService = $whatsService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titles = $this->mkauthService->getTitles();

    }

   public function losers()
   {
       $titles = $this->mkauthService->getTitles();

       $titlesLosers = collect($titles['titulos'])->filter(function ($title){
          return $title['status'] == 'vencido';
       });

//        $msg = $this->whatsService->sendSessionMessage('5575997140438');

      return view('painel.titles.index',[
          'titlesLosers' => $titlesLosers
      ]);
   }
}
