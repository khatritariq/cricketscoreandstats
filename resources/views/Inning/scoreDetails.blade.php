<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @if($inningData)

                <div >
                    Match between
                    <b>{{$inningData['match']['team1']['name'] }}</b>
                    and
                    <b>{{$inningData['match']['team2']['name'] }}</b>
                </div>


            @foreach($inningData['playerbattingstat'] as $playerbatting)


            @endforeach
            @endif


        </div>
    </div>
</div>
