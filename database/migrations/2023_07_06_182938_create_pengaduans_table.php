<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tgl_pengaduan');
            $table->char('nim', 16)->nullable();
            $table->unsignedBigInteger('user_id');
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('foto');
            $table->enum('status', ['pending', 'diproses', 'selesai']);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengaduan');
    }
};
