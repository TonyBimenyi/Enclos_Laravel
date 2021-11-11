<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveMinervalIdFromRevenuses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('revenuses', function (Blueprint $table) {
            $table->dropIfExists('minerval_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('revenuses', function (Blueprint $table) {
            $table->bigInteger('minerval_id');
        });
    }
}
