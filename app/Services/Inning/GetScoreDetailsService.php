<?php

namespace App\Services\Inning;

use App\Services\AService;

/**
 * Class GetScoreDetailsService
 *
 * @package App\Services\Inning
 * Gets Inning Score Details
 */
class GetScoreDetailsService extends AService
{
    /**
     * Gets Inning Score Details
     *
     * @param int $tournament_id
     * @param int $round_id
     * @param int $match_id
     * @param int $inning_id
     *
     * @throws \Exception
     *
     * @return array
     */
    public function __invoke($tournament_id, $round_id, $match_id, $inning_id) : array
    {


        print_r($tournament_id);
        print_r($round_id);
        print_r($match_id);
        print_r($inning_id);
        die();
    }
}
