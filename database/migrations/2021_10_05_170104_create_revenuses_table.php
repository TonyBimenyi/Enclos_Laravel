<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevenusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revenuses', function (Blueprint $table) {
            $table->id();
            $table->string('type_revenu');
            $table->integer('montant_revenu');
            $table->string('description_revenu');
            $table->date('date_revenu');
            $table->string('user');
            $table->timestamps();
            $table->unsignedBigInteger('minerval_id');
            $table->foreign('minerval_id')
           ->references('id')
           ->on('minervals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('revenuses');
        Schema::dropIfExists('statut');
        Schema::dropIfExists('statut_stat');
    }
}
