<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerBowlingStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_bowling_stats', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('participant_id')->index();
            $table->unsignedInteger('inning_id')->index();

            $table->float('overs')->default(0.0);
            $table->integer('maidens')->default(0);
            $table->integer('runs')->default(0);
            $table->integer('wickets')->default(0);
            $table->float('economy')->default(0.0);
            $table->integer('zeros')->default(0);
            $table->integer('fours')->default(0);
            $table->integer('sixes')->default(0);
            $table->integer('wide_ball')->default(0);
            $table->integer('no_ball')->default(0);

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('participant_id')
                ->references('id')->on('match_participants')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('inning_id')
                ->references('id')->on('innings')
                ->onUpdate('cascade')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_bowling_stats');
    }
}
