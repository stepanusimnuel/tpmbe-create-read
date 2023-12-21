<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->string("nim");
            $table->integer("semester");
            $table->date("tgl_lahir");
            $table->string("alamat");
            $table->string("image");

            $table->unsignedBigInteger("id_fakultas");
            $table->foreign('id_fakultas')->references('id')->on('fakultas')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
