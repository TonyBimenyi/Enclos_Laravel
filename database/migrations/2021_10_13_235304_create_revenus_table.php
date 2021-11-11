<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revenus', function (Blueprint $table) {
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
           $table->integer('statut');
           $table->integer('statut_stat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('revenus');
    }
}
