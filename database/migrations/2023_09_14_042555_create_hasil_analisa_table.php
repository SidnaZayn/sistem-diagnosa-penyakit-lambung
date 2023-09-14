
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
        Schema::create('hasil_analisa', function (Blueprint $table) {
            $table->id(); // Add this line to create an 'id' column as the primary key
            $table->foreignId('pasien_id')->constrained('pasiens');
            $table->foreignId('penyakit_solusi_id')->constrained('penyakit_solusi');
            $table->foreignId('gejala_id')->constrained('gejala');
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
        Schema::dropIfExists('hasil_analisa');
    }
};

