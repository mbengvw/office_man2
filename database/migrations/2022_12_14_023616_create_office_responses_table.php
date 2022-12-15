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
        Schema::create('office_responses', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 500);
            $table->integer('usia');
            $table->string('pendidikan', 200);
            $table->string('pekerjaan', 200);
            $table->integer('no_1');
            $table->integer('no_2');
            $table->integer('no_3');
            $table->integer('no_4');
            $table->integer('no_5');
            $table->integer('no_6');
            $table->integer('no_7');
            $table->integer('no_8');
            $table->integer('no_9');
            $table->integer('no_10');
            $table->text('saran');
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
        Schema::dropIfExists('office_responses');
    }
};
