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
        Schema::create('keberangkatan', function (Blueprint $table) {
            $table->biginteger('keberangkatan_id')->unsigned()->autoIncrement();
            $table->biginteger('kendaraan_id')->unsigned();
            $table->biginteger('driver_id')->unsigned();
            $table->string('keberangkatan', 64);
            $table->string('tujuan', 24);
            $table->time('jam');
            $table->date('tanggal');
            $table->string('keterangan', 20);
            $table->string('kode', 8);
            $table->biginteger('created_by')->unsigned();
            $table->timestamps();

            $table->foreign('kendaraan_id')->references('kendaraan_id')->on('kendaraan')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('driver_id')->references('driver_id')->on('driver')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('created_by')->references('user_id')->on('user')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keberangkatan');
    }
};
