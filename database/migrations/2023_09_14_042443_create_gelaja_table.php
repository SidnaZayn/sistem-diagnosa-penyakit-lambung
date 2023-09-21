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
            $table->string('heart_burn')->default('0')->comment("(dada terasa panas)");
            $table->string('regurgitasi')->default('0')->comment("naiknya isi lambung ke arah tenggorok");
            $table->string('mual')->default('0');
            $table->string('muntah')->default('0');
            $table->string('sendawa')->default('0')->comment("seberapa sering ?");
            $table->string('perut_kembung')->default('0')->comment("terasa penuh");
            $table->string('nyeri_ulu_hati')->default('0');
            $table->string('nyeri_ulu_hati_bila_makan')->default('0');
            $table->string('muntah_darah')->default('0');
            $table->string('feses_berdarah_berlendir')->default('0');
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