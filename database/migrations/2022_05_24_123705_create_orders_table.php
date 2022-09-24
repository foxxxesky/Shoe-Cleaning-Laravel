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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('nama_produk');
            $table->string('nama_pemesan');
            $table->string('no_hp');
            $table->string('catatan')->default('-')->nullable();
            $table->string('ulasan')->default('-')->nullable();
            $table->dateTime('tanggal_pickup');
            $table->string('alamat_penjemputan');
            $table->string('alamat_pengiriman');
            $table->string('pembayaran');
            $table->string('jumlah');
            $table->string('harga');
            $table->string('status_pembayaran')->default('Lunas');
            $table->string('status_cucian')->default('waiting respone');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};