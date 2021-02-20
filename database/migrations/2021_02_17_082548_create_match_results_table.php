<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('offence_user_id')->nullable();
            $table->integer('offence_layout_1')->nullable();
            $table->integer('offence_layout_2')->nullable();
            $table->integer('offence_layout_3')->nullable();
            $table->integer('offence_layout_4')->nullable();
            $table->integer('offence_layout_5')->nullable();
            $table->integer('diffence_layout_1')->default(1);
            $table->integer('diffence_layout_2')->default(2);
            $table->integer('diffence_layout_3')->default(3);
            $table->integer('diffence_layout_4')->default(4);
            $table->integer('diffence_layout_5')->default(5);
            $table->integer('open_card')->default(1);
            $table->boolean('offence_user_access')->default(0);
            $table->boolean('diffence_user_access')->default(0);
            $table->boolean('diffence_entry')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('match_results');
    }
}
