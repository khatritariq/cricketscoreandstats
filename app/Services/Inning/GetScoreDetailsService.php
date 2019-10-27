<?php

namespace App\Services\Inning;

use App\Domain\Inning;
use App\Domain\Participant;
use App\Domain\Player;
use App\Domain\TeamPlayer;
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
     * @return array|null
     */
    public function __invoke($tournament_id, $round_id, $match_id, $inning_id) : ?array
    {
        try {
            /* Get Inning Batting and Bowling Stats */

            //\DB::enableQueryLog();
            $inning = Inning::where('id', $inning_id)
                ->with(
                    'playerbattingstat.participant.teamplayer.player',
                    'playerbowlingstat.participant.teamplayer.player',
                    'match.team1',
                    'match.team2'
                )->first();

            return $inning->ToArray();
        } catch (\Exception $e)
        {
            throw new \Exception('There was some problem fetching innings score details');
        }
    }
}
