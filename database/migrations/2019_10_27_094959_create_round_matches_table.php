<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoundMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('round_matches', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('round_id')->index();
            $table->unsignedInteger('match_id')->index();
            $table->timestamps();

            $table->foreign('round_id')
                ->references('id')->on('rounds')
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
        Schema::dropIfExists('round_matches');
    }
}
