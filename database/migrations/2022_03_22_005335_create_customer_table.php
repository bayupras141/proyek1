<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 45);
            $table->string('alamat', 50);
            $table->char('nik', 22)->unique();
            $table->string('email', 25)->unique();
            $table->string('username', 25)->unique();
            $table->string('password', 25);
            $table->char('no_hp', 13);
            $table->string('jenis_kelamin', 10); 
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
        Schema::dropIfExists('customer');
    }
}
