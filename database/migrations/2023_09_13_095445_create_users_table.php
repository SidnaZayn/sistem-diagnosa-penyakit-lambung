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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('gender', 20)->nullable();
            $table->integer('age')->nullable();
            $table->string('alamat', 100)->nullable();
            $table->foreignId('role_id')->constrained();
            $table->timestamps();
        });

        // Insert some stuff
        DB::table('users')->insert(
            array(
                'name' => 'admin',
                'email' =>'admin@mail.com',
                'password' => Hash::make('11223344'),
                'role_id' => '1',
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table)
        {
            $table->dropForeign('users_role_id_foreign');
        });
        Schema::dropIfExists('users');
    }
};