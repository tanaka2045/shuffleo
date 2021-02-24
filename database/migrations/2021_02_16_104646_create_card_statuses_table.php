<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_statuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('user_id');
            $table->integer('offence_card_point_1')->default(10);
            $table->integer('offence_card_point_2')->default(20);
            $table->integer('offence_card_point_3')->default(30);
            $table->integer('offence_card_point_4')->default(40);
            $table->integer('offence_card_point_5')->default(50);
            $table->integer('diffence_card_point_1')->default(10);
            $table->integer('diffence_card_point_2')->default(20);
            $table->integer('diffence_card_point_3')->default(30);
            $table->integer('diffence_card_point_4')->default(40);
            $table->integer('diffence_card_point_5')->default(60);
            $table->integer('tip_count')->default(0);
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
        Schema::dropIfExists('card_statuses');
    }
}
