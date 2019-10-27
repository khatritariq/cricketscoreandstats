<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @if($inningData)
                <h2>
                <div >
                    Match between
                    <b style="color:red;">{{$inningData['match']['team1']['name'] }}</b>
                    and
                    <b style="color:red;">{{$inningData['match']['team2']['name'] }}</b>
                    at
                    <b style="color:blue;">{{ $inningData['match']['venue'] }}</b>
                </div>
                </h2>
        <div>
            <h3>Inning details</h3>
            <b>Batting Stats</b>

                <table border="1">
                    <thead>
                        <tr>
                            <td>Player</td>
                            <td>Runs</td>
                            <td>Balls</td>
                            <td>Strike Rate</td>
                            <td>Fours</td>
                            <td>Sixes</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($inningData['playerbattingstat'] as $playerstats)
                        <tr>
                            <td>
                                {{ $playerstats['participant']['teamplayer']['player']['name'] }}
                            </td>
                            <td>
                                {{ $playerstats['runs'] }}
                            </td>
                            <td>
                                {{ $playerstats['balls'] }}
                            </td>
                            <td>
                                {{ $playerstats['strike_rate'] }}
                            </td>
                            <td>
                                {{ $playerstats['fours'] }}
                            </td>
                            <td>
                                {{ $playerstats['sixes'] }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

        </div>
<br>
                <b>Bowling Stats</b>

                <table border="1">
                    <thead>
                    <tr>
                        <td>Player</td>
                        <td>Overs</td>
                        <td>Maidens</td>
                        <td>Runs</td>
                        <td>Wickets</td>
                        <td>Economy</td>
                        <td>0s</td>
                        <td>4s</td>
                        <td>6s</td>
                        <td>Wides</td>
                        <td>No balls</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($inningData['playerbowlingstat'] as $playerstats)
                        <tr>
                            <td>
                                {{ $playerstats['participant']['teamplayer']['player']['name'] }}
                            </td>
                            <td>
                                {{ $playerstats['overs'] }}
                            </td>
                            <td>
                                {{ $playerstats['maidens'] }}
                            </td>
                            <td>
                                {{ $playerstats['runs'] }}
                            </td>
                            <td>
                                {{ $playerstats['wickets'] }}
                            </td>
                            <td>
                                {{ $playerstats['economy'] }}
                            </td>
                            <td>
                                {{ $playerstats['zeros'] }}
                            </td>
                            <td>
                                {{ $playerstats['fours'] }}
                            </td>
                            <td>
                                {{ $playerstats['sixes'] }}
                            </td>
                            <td>
                                {{ $playerstats['wide_ball'] }}
                            </td>
                            <td>
                                {{ $playerstats['no_ball'] }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

        </div>


            @endif


        </div>
    </div>
</div>
