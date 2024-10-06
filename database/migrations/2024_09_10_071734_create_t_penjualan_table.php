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
        Schema::create('t_penjualan', function (Blueprint $table) {
            $table->id('penjualan_id');
            $table->unsignedBigInteger('user_id')->index(); //Index Forign Key
            $table->string('pembeli', 50);
            $table->string('penjualan_kode', 20)->unique();
            $table->datetime('penjualan_tanggal');
            $table->timestamps();

            //Mendefinisikan foreign key pada kolom level_id yang mengacu pada kolom level_id di tabel m_level
            $table->foreign('user_id')->references('user_id')->on('m_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_penjualan');
    }
};
