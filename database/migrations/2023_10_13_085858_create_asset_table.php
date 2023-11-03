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
        Schema::create('asset', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->decimal('product_price', 10, 2);
            $table->string('product_serial_number')->unique();
            $table->integer('product_stock');
            $table->timestamps();
        });

        Schema::table('asset', function (Blueprint $table) {
            $table->renameColumn('nama_barang', 'product_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Asset');
    }
};
