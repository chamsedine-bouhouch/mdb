<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyDemande extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('demandes', function (Blueprint $table) {
            $table->integer('user_id')->nullable()->unsigned();
            $table->integer('technicien_id')->nullable()->unsigned();
            $table->integer('facture_id')->nullable()->unsigned();
            $table->foreign('user_id')
            ->references('id')->on('users');
            $table->foreign('technicien_id')
            ->references('id')->on('users');
            $table->foreign('facture_id')
            ->references('id')->on('facture');
                        
        });
        Schema::create('services_demande', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('service_id')->nullable()->unsigned();
            $table->integer('demande_id')->nullable()->unsigned();
            $table->foreign('service_id')
            ->references('id')->on('services');
            $table->foreign('demande_id')
            ->references('id')->on('demande');
        });
        Schema::create('produit_demande', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('produit_id')->nullable()->unsigned();
            $table->integer('demande_id')->nullable()->unsigned();
            $table->foreign('produit_id')
            ->references('id')->on('demande');
            $table->foreign('demande_id')
            ->references('id')->on('demande');
        });
        Schema::table('factures', function (Blueprint $table) {
            $table->integer('demande_id')->nullable()->unsigned();
            $table->foreign('demande_id')
            ->references('id')->on('demande');
                        
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('demande', function (Blueprint $table) {
            //
        });
    }
}
