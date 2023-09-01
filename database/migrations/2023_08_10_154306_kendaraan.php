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
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->biginteger('kendaraan_id')->unsigned()->autoIncrement();
            $table->string('nama_kendaraan', 24);
            $table->string('nomor_kendaraan', 10);
            $table->biginteger('created_by')->unsigned();
            $table->timestamps();

            $table->foreign('created_by')->references('user_id')->on('user')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraan');
    }
};
