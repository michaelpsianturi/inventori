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
        Schema::create('histori_logs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('group_id');
            $table->foreign('group_id')->references('id')->on('asset')->onDelete('casade');
            $table->foreign('group_id')->references('id')->on('datauser')->onDelete('casade');
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
