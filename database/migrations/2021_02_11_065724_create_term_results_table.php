<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTermResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('term_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('user_id');
            $table->integer('term_count')->default(1);
            $table->timestamp('finished_at')->nullable();
            $table->integer('win_count_offence')->default(0);
            $table->integer('lose_count_offence')->default(0);
            $table->integer('win_count_diffence')->default(0);
            $table->integer('lose_count_diffence')->default(0);
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
        Schema::dropIfExists('term_results');
    }
}
