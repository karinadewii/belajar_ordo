<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id(); // Kolom ID
            $table->string('nama'); // Kolom nama
            $table->string('jenis'); // Kolom jenis
            $table->decimal('harga', 15, 2); // Kolom harga dengan 15 digit dan 2 angka desimal
            $table->date('tanggal_pembuatan'); // Kolom tanggal_pembuatan
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
