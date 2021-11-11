<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIcegeranyostable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('statis');
        Schema::dropIfExists('stas');
        Schema::dropIfExists('statistis');
        Schema::dropIfExists('egos');
        Schema::dropIfExists('statistics');
        Schema::create('icegeranyos', function (Blueprint $table) {
            $table->id();
            $table->string('type_depense');
            $table->integer('montant_depense');
            $table->string('description_depense');
            $table->date('date_depense');
            $table->string('type_revenu');
            $table->integer('montant_revenu');
            $table->string('description_revenu');
            $table->date('date_revenu');
            $table->integer('statut');
            $table->string('reserve');
            $table->unsignedBigInteger('depense_id')->nullable();
            $table->unsignedBigInteger('revenu_id')->nullable();
            $table->foreign('depense_id')
           ->references('id')
           ->on('deps');
           /*->onDelete('cascade')
           ->onUpdate('cascade');*/
           $table->foreign('revenu_id')
           ->references('id')
           ->on('revenuses');
            /*->onDelete('cascade')
           ->onUpdate('cascade');*/
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
        Schema::dropIfExists('stats');
    }
}
