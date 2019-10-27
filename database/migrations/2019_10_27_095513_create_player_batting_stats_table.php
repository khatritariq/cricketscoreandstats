<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerBattingStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_batting_stats', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('participant_id')->index();
            $table->unsignedInteger('inning_id')->index();

            $table->integer('runs')->default(0);
            $table->integer('balls')->default(0);
            $table->integer('fours')->default(0);
            $table->integer('sixes')->default(0);
            $table->float('strike_rate')->default(0.0);
            $table->enum('batting_status',['out','not-out'])->default('not-out');

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
        Schema::dropIfExists('player_batting_stats');
    }
}
