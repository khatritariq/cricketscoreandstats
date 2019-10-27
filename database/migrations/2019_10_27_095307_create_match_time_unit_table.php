<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchTimeUnitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_time_unit', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('match_id');
            $table->integer('per_second_mapping')->default(1);

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
        Schema::dropIfExists('match_time_unit');
    }
}
