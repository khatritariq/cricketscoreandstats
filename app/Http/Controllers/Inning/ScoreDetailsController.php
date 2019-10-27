<?php

namespace App\Http\Controllers\Inning;

use App\Http\Controllers\Controller;
use App\Services\Inning\Factories\InningServiceFactory;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ScoreDetailsController extends Controller
{

    public function __invoke(Request $request, $tournament_id, $round_id, $match_id, $inning_id) : Response
    {

        /* @var $inningService \App\Services\Inning\GetScoreDetailsService */
        $inningService = InningServiceFactory::create('GetScoreDetailsService', []);
        dd($inningService($tournament_id, $round_id, $match_id, $inning_id));

    }
}
