<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTermEndPointToTermResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('term_results', function (Blueprint $table) {
            //タームエンドポイント（100x試合目かどうかの）確認フラグの追加
            $table->boolean('term_end_point')->default(0);
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
            $table->dropColumn('term_end_point');
        });
    }
}
