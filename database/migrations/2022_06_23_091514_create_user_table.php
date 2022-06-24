<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use illuminate\support\Facades\DB;
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
        Schema::create('tb_user', function (Blueprint $table) {
            $table->id();
            $table->string('nama_user');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('level');
            $table->timestamps();
        });

        DB::table('tb_user')->insert([
            'nama_user' => 'Administrator',
            'email' => 'Admin@gmail.com',
            'password' => 'admin',
            'level' => 'admin',
        ]);

        DB::table('tb_user')->insert([
            'nama_user' => 'user',
            'email' => 'user@gmail.com',
            'password' => 'user',
            'level' => 'user',

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_user');
    }
};
