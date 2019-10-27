<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_participants', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('team_player_id')->index();
            $table->unsignedInteger('match_id')->index();
            $table->timestamps();

            $table->foreign('team_player_id')
                ->references('id')->on('team_players')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('match_id')
                ->references('id')->on('matches')
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
        Schema::dropIfExists('match_participants');
    }
}
