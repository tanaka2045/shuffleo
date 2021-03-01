<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeTermEndPointBooleanToIntegerOnTermResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('term_results', function (Blueprint $table) {
            //ターム終了フラグの型式をboolean からintegerに変更
            $table->integer('term_end_point')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('term_results', function (Blueprint $table) {
            //
            $table->boorean('term_end_point')->change();
        });
    }
}
