<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        /* Inserting tournament */
        DB::table('tournaments')->insert([
            'name' => "Indian Premier Leagure",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        /* Inserting Round and mapping to tournament */
        DB::table('rounds')->insert(
            [
                'name' => 'Qualifier Round',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );
        DB::table('tournament_rounds')->insert([
            'tournament_id' => 1,
            'round_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        /*Inserting teams*/
        DB::table('teams')->insert([
            'name' => 'Chennai Super Kings',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('teams')->insert([
            'name' => 'Sunrisers Hyderabad',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        /*Inserting matches*/
        DB::table('matches')->insert([
            'team1' => 1,
            'team2' => 2,
            'start_time' => '2019-01-01 18:00:00',
            'end_time' => '2019-01-01 21:00:00',
            'winner_team' => 1,
            'venue' => 'Wankhede Stadium, Mumbai',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('round_matches')->insert([
            'round_id' => 1,
            'match_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        /*Insert match per unit time*/
        DB::table('match_time_unit')->insert([
            'match_id' => 1,
            'per_second_mapping' => 12
        ]);

        /*Insert Innings*/
        DB::table('innings')->insert([
            'match_id' => 1,
            'team_id'  => 1,
            'score'    => 150,
            'wickets'  => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('innings')->insert([
            'match_id' => 1,
            'team_id'  => 2,
            'score'    => 130,
            'wickets'  => 10,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        /*Inserting players*/
        DB::table('players')->insert([
            'name' => 'CSK-1',
            'player_type' => 'batsman',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('players')->insert([
            'name' => 'CSK-2',
            'player_type' => 'batsman',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('players')->insert([
            'name' => 'CSK-3',
            'player_type' => 'wicket-keeper',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('players')->insert([
            'name' => 'CSK-4',
            'player_type' => 'bowler',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('players')->insert([
            'name' => 'CSK-5',
            'player_type' => 'bowler',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('players')->insert([
            'name' => 'SRH-1',
            'player_type' => 'batsman',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('players')->insert([
            'name' => 'SRH-2',
            'player_type' => 'batsman',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('players')->insert([
            'name' => 'SRH-3',
            'player_type' => 'wicket-keeper',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('players')->insert([
            'name' => 'SRH-4',
            'player_type' => 'bowler',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('players')->insert([
            'name' => 'SRH-5',
            'player_type' => 'bowler',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('team_players')->insert([
            'team_id' => 1,
            'player_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('team_players')->insert([
            'team_id' => 1,
            'player_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('team_players')->insert([
            'team_id' => 1,
            'player_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('team_players')->insert([
            'team_id' => 1,
            'player_id' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('team_players')->insert([
            'team_id' => 1,
            'player_id' => 5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('team_players')->insert([
            'team_id' => 2,
            'player_id' => 6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('team_players')->insert([
            'team_id' => 2,
            'player_id' => 7,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('team_players')->insert([
            'team_id' => 2,
            'player_id' => 8,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('team_players')->insert([
            'team_id' => 2,
            'player_id' => 9,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('team_players')->insert([
            'team_id' => 2,
            'player_id' => 10,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        /*Inserting match participants*/
        DB::table('match_participants')->insert([
            'team_player_id' => 1,
            'match_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('match_participants')->insert([
            'team_player_id' => 2,
            'match_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('match_participants')->insert([
            'team_player_id' => 3,
            'match_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('match_participants')->insert([
            'team_player_id' => 4,
            'match_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('match_participants')->insert([
            'team_player_id' => 5,
            'match_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('match_participants')->insert([
            'team_player_id' => 6,
            'match_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('match_participants')->insert([
            'team_player_id' => 7,
            'match_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('match_participants')->insert([
            'team_player_id' => 8,
            'match_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('match_participants')->insert([
            'team_player_id' => 9,
            'match_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('match_participants')->insert([
            'team_player_id' => 10,
            'match_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        /*Inserting player batting and bowling stats*/
        DB::table('player_batting_stats')->insert([
            'participant_id' => 1,
            'inning_id' => 1,
            'runs' => 46,
            'balls' => 45,
            'fours' => 4,
            'sixes' => 2,
            'strike_rate' => 101.12,
            'batting_status' => 'out',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('player_batting_stats')->insert([
            'participant_id' => 2,
            'inning_id' => 1,
            'runs' => 56,
            'balls' => 40,
            'fours' => 6,
            'sixes' => 2,
            'strike_rate' => 125,
            'batting_status' => 'not-out',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('player_batting_stats')->insert([
            'participant_id' => 3,
            'inning_id' => 1,
            'runs' => 20,
            'balls' => 20,
            'fours' => 2,
            'sixes' => 2,
            'strike_rate' => 100,
            'batting_status' => 'not-out',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('player_bowling_stats')->insert([
            'participant_id' => 9,
            'inning_id' => 1,
            'overs' => 4,
            'maidens' => 0,
            'runs' => 40,
            'wickets' => 1,
            'economy' => 25,
            'zeros' => 3,
            'fours' => 3,
            'sixes' => 4,
            'wide_ball' => 1,
            'no_ball' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('player_bowling_stats')->insert([
            'participant_id' => 10,
            'inning_id' => 1,
            'overs' => 4,
            'maidens' => 0,
            'runs' => 34,
            'wickets' => 1,
            'economy' => 34,
            'zeros' => 2,
            'fours' => 3,
            'sixes' => 2,
            'wide_ball' => 0,
            'no_ball' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
