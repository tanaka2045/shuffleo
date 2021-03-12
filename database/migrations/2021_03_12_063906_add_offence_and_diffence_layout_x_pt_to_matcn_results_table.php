<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOffenceAndDiffenceLayoutXPtToMatcnResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('match_results', function (Blueprint $table) {
            //レイアウトしたそれぞれのカードNoを取得する箱を用意
            $table->integer('offence_layout_1_pt')->nullable();
            $table->integer('offence_layout_2_pt')->nullable();
            $table->integer('offence_layout_3_pt')->nullable();
            $table->integer('offence_layout_4_pt')->nullable();
            $table->integer('offence_layout_5_pt')->nullable();
            $table->integer('diffence_layout_1_pt')->nullable();
            $table->integer('diffence_layout_2_pt')->nullable();
            $table->integer('diffence_layout_3_pt')->nullable();
            $table->integer('diffence_layout_4_pt')->nullable();
            $table->integer('diffence_layout_5_pt')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('match_results', function (Blueprint $table) {
            //
            $table->dropColumn('offence_layout_1_pt');
            $table->dropColumn('offence_layout_2_pt');
            $table->dropColumn('offence_layout_3_pt');
            $table->dropColumn('offence_layout_4_pt');
            $table->dropColumn('offence_layout_5_pt');
            $table->dropColumn('diffence_layout_1_pt');
            $table->dropColumn('diffence_layout_2_pt');
            $table->dropColumn('diffence_layout_3_pt');
            $table->dropColumn('diffence_layout_4_pt');
            $table->dropColumn('diffence_layout_5_pt');
        });
    }
}
