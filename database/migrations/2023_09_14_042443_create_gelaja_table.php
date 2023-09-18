<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gejala', function (Blueprint $table) {
            $table->id();
            $table->string('mual')->default('0');
            $table->string('muntah')->default('0');
            $table->string('muntah_asam')->default('0');
            $table->string('muntah_darah')->default('0');
            $table->string('panas')->default('0');
            $table->string('sakit_perut')->default('0');
            $table->string('buang_air_besar')->default('0');
            $table->string('mulut_luka')->default('0');
            $table->string('bibir_pecah')->default('0');
            $table->string('badan_lesu')->default('0');
            $table->string('pusing')->default('0');
            $table->string('kehilangan_nafsu')->default('0'); //Perut terasa nyeri, pedih, kembung, dan sesak (sebak) pada bagian atas perut
            $table->string('perut_nyeri')->default('0');
            $table->string('mulut_kering')->default('0');
            $table->string('sering_sendawa')->default('0'); //Sering sendawa terutama bila dalam keadaan lapar
            $table->string('sulit_tidur')->default('0'); //Sulit tidur karena gangguan rasa sakit pada daerah perut sebelah atas (ulu hati)
            $table->string('bengkak_rahang')->default('0');
            $table->string('bau_nafas')->default('0');
            $table->string('feses_berdarah_berlendir')->default('0');
            $table->string('tidak_buang_besar')->default('0'); //Tidak buang air besar lebih dari 3 hari
            $table->foreignId('pasien_id')->constrained();
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
        Schema::dropIfExists('gelaja');
    }
};