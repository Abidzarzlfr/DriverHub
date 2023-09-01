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
        Schema::create('driver', function (Blueprint $table) {
            $table->biginteger('driver_id')->unsigned()->autoIncrement();
            $table->string('nama_driver', 64);
            $table->string('status', 12);
            $table->string('npk', 12);
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
        Schema::dropIfExists('driver');
    }
};
