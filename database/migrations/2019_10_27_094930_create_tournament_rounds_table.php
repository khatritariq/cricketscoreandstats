<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTournamentRoundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournament_rounds', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tournament_id')->index();
            $table->unsignedInteger('round_id')->index();
            $table->timestamps();

            $table->foreign('tournament_id')
                ->references('id')->on('tournaments')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('round_id')
                ->references('id')->on('rounds')
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
        Schema::dropIfExists('tournament_rounds');
    }
}
