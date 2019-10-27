<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('team1');
            $table->unsignedInteger('team2');

            $table->dateTime('start_time');
            $table->dateTime('end_time');

            $table->unsignedInteger('winner_team');
            $table->string('venue');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('team1')
                ->references('id')->on('teams')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('team2')
                ->references('id')->on('teams')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('winner_team')
                ->references('id')->on('teams')
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
        Schema::dropIfExists('matches');
    }
}
