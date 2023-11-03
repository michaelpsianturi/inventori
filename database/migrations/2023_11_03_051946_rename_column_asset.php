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
        Schema::table('asset', function (Blueprint $table) {
            $table->renameColumn('harga_barang', 'product_price');
            $table->renameColumn('nomor_seri_barang', 'product_serial_number');
            $table->renameColumn('jumlah_barang', 'product_stock');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('asset', function (Blueprint $table) {
            $table->renameColumn('harga_barang', 'product_price');
            $table->renameColumn('nomor_seri_barang', 'product_serial_number');
            $table->renameColumn('jumlah_barang', 'product_stock');
        });
    }
};