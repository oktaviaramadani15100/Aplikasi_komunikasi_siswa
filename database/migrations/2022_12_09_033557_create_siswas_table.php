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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kelas');
            $table->enum('jurusan',['PPLG', 'TJKT', 'BRODCASTING', 'MULTIMEDIA', 'TEI']);
            $table->integer('nisn');
            $table->enum('jeniskelamin',['wanita', 'pria']);
            $table->string('alamat');
            $table->bigInteger('notelepon');
            $table->string('email');
            $table->integer('password');
            $table->unsignedBigInteger('guru_id');
            $table->foreign('guru_id')->references('id')->on('gurus');
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
        Schema::dropIfExists('siswas');
    }
};
