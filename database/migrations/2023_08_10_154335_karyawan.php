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
        Schema::create('karyawan', function (Blueprint $table) {
            $table->biginteger('karyawan_id')->unsigned()->autoIncrement();
            $table->string('nama_karyawan', 30);
            $table->biginteger('divisi_id')->unsigned();
            $table->string('npk', 12);
            $table->biginteger('created_by')->unsigned();
            $table->timestamps();

            
            $table->foreign('created_by')->references('user_id')->on('user')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('divisi_id')->references('divisi_id')->on('divisi')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawan');
    }
};
