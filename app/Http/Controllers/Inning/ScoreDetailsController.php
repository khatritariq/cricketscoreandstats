<?php

namespace App\Http\Controllers\Inning;

use App\Http\Controllers\Controller;
use App\Services\Inning\Factories\InningServiceFactory;
use Illuminate\Http\Request;

class ScoreDetailsController extends Controller
{

    public function __invoke(Request $request, $tournament_id, $round_id, $match_id, $inning_id)
    {

        /* @var $inningService \App\Services\Inning\GetScoreDetailsService */
        $inningService = InningServiceFactory::create('GetScoreDetailsService', []);
        $inningData = $inningService($tournament_id, $round_id, $match_id, $inning_id);
        //dd($inningData->toArray());
        return view('Inning.scoreDetails', ['inningData' => $inningData]);
    }
}
