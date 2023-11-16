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
        Schema::table('accessories', function (Blueprint $table) {
            $table->renameColumn('nama_barang', 'accessories_name');
            $table->renameColumn('harga_barang', 'accessories_price');
            $table->renameColumn('nomor_seri_barang', 'accessories_serial_number');
            $table->renameColumn('jumlah_barang', 'accessories_stock');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('accessories', function (Blueprint $table) {
            $table->renameColumn('nama_barang', 'accessories_name');
            $table->renameColumn('harga_barang', 'accessories_price');
            $table->renameColumn('nomor_seri_barang', 'accessories_serial_number');
            $table->renameColumn('jumlah_barang', 'accessories_stock');
        });
    }
};
