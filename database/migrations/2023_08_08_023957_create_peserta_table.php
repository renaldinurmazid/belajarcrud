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
        Schema::create('peserta', function (Blueprint $table) {
            $table->id();
            $table->string('nis',10)->unique();
            $table->string('namalengkap',255);
            $table->enum('jk',['L','P']);
            $table->string('kelas',10);
            $table->date('tgllahir');
            $table->integer('nilai_web');
            $table->integer('nilai_pbo');
            $table->integer('nilai_db');
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
        Schema::dropIfExists('peserta');
    }
};
