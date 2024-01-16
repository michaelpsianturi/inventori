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
        Schema::create('historilogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('assets_id')->nullable();
            $table->unsignedBigInteger('datauser_id')->nullable();
            $table->foreign('assets_id')->references('id')->on('assets')->onDelete('cascade');
            $table->foreign('datauser_id')->references('id')->on('datauser')->onDelete('cascade');
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('histori_logs');
    }
};
