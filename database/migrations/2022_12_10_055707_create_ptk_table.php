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
        Schema::create('ptk', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('nip', 20)->nullable();
            $table->string('npwp', 20)->nullable();
            $table->string('nuptk', 20)->nullable();
            $table->string('nama_lengkap', 100);
            $table->string('gelar_depan', 5);
            $table->string('gelar_belakang', 5);
            $table->enum('jk', ['L', 'P']);
            $table->string('tempat_lahir', 20)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->enum('jenjang_pendidikan', ['D2', 'D3', 'D4', 'S1', 'S2', 'S3']);
            $table->enum('fungsi', ['guru', 'staf']);
            $table->enum('status_kepegawaian', ['PNS', 'NON PNS']);
            $table->string('alamat', 200)->nullable();
            $table->string('no_hp', 20)->nullable();
            $table->string('kode_pos', 10)->nullable();
            $table->enum('status_aktif', ['AKTIF', 'NON AKTIF']);
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
        Schema::dropIfExists('ptk');
    }
};
