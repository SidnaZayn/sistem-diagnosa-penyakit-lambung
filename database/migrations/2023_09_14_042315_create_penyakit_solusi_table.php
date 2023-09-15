<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyakit_solusi', function (Blueprint $table) {
            $table->id(); // Add this line to create an 'id' column as the primary key
            $table->string('nama_penyakit', 100)->nullable();
            $table->text('definisi')->nullable();
            $table->text('solusi')->nullable();
            $table->text('tindak_lanjut');
            $table->text('obat');
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
        Schema::dropIfExists('penyakit_solusi');
    }
};