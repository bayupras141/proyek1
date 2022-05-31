<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('invoice')->nullable();
            $table->integer('total_bayar')->unsigned()->nullable();
            $table->integer('diskon')->unsigned()->nullable();
            $table->integer('ongkir')->unsigned()->nullable();
            $table->enum('status',['Lunas', 'Belum lunas', 'Belum Bayar'])->default('Belum Bayar');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('produk_id');
            $table->foreign('customer_id')->references('id')->on('customer');
            $table->foreign('produk_id')->references('id')->on('produk');
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
        Schema::dropIfExists('transaksi');
    }
}
