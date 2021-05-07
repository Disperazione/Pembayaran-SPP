<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained('siswa')->onDelete('cascade')->onUpdate('cascade');
            $table->date('tgl_bayar');
            $table->string('bulan_bayar');
            $table->string('tahun_bayar');
            $table->unsignedBigInteger('spp_id')->nullable();
            $table->string('jumlah_bayar', 45);
            $table->enum('status', ['bayar', 'belum']);
             $table->unsignedBigInteger('petugas_id');
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
        Schema::dropIfExists('_pembayaran');
    }
}
