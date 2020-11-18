<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->char('user_id');
            $table->char('nim');
            $table->string('nama');
            $table->string('alamat');
            $table->char('telepon');
            $table->char('cellphone');
            $table->string('agama');
            $table->string('email')->unique();
            $table->foreignId('id_pendidikan_terakhir');
            $table->string('aktif');
            $table->string('username');
            $table->string('password');
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
        Schema::dropIfExists('employees');
    }
}
