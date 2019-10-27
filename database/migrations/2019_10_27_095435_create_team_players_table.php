<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_players', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('team_id')->index();
            $table->unsignedInteger('player_id')->index();
            $table->timestamps();

            $table->foreign('team_id')
                ->references('id')->on('teams')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('player_id')
                ->references('id')->on('players')
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
        Schema::dropIfExists('team_players');
    }
}
