<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugas', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->enum('level', ['petugas', 'admin']);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::table('pembayaran', function (Blueprint $table) {
            $table->foreign('petugas_id')->references('id')->on('petugas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_petugas');
    }
}
