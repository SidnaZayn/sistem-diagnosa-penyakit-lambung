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
            $table->string('mual');
            $table->string('muntah');
            $table->string('muntah_asam');
            $table->string('muntah_darah');
            $table->string('panas');
            $table->string('sakit_perut');
            $table->string('buang_air_besar');
            $table->string('mulut_luka');
            $table->string('demam');
            $table->string('bibir_pecah');
            $table->string('badan_lesu');
            $table->string('pusing');
            $table->string('kehilangan_nafsu'); //Perut terasa nyeri, pedih, kembung, dan sesak (sebak) pada bagian atas perut
            $table->string('perut_nyeri');
            $table->string('mulut_kering');
            $table->string('sering_sendawa'); //Sering sendawa terutama bila dalam keadaan lapar
            $table->string('sulit_tidur'); //Sulit tidur karena gangguan rasa sakit pada daerah perut sebelah atas (ulu hati)
            $table->string('bengkak_rahang');
            $table->string('bau_nafas');
            $table->string('feses_berdarah_berlendir');
            $table->string('tidak_buang_besar'); //Tidak buang air besar lebih dari 3 hari
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