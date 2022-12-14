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
        Schema::create('office_buku_tamu', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap', 100);
            $table->string('no_hp', 15);
            $table->string('alamat', 200);
            $table->bigInteger('id_struktural_tujuan');
            $table->text('keperluan');
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('office_buku_tamu');
    }
};
