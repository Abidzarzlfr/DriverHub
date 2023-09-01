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
        Schema::create('penumpang', function (Blueprint $table) {
            $table->biginteger('penumpang_id')->unsigned()->autoIncrement();
            $table->biginteger('keberangkatan_id')->unsigned();
            $table->biginteger('karyawan_id')->unsigned();
            $table->biginteger('created_by')->unsigned();
            $table->timestamps();

            $table->foreign('keberangkatan_id')->references('keberangkatan_id')->on('keberangkatan')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('karyawan_id')->references('karyawan_id')->on('karyawan')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('created_by')->references('user_id')->on('user')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penumpang');
    }
};
