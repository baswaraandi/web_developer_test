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
        Schema::create('products', function (Blueprint $table): void {
            $table->id();
            $table->integer('IdCategoryProduct');
            $table->integer('IdSubCategoryProduct');
            $table->integer('CreateSN');
            $table->string('IdProduct', 20);
            $table->string('Name', 255);
            $table->string('PNO', 15);
            $table->integer('Price_lama');
            $table->double('Price');
            $table->integer('Stock');
            $table->string('Description', 255);
            $table->integer('MinQty');
            $table->float('Weight');
            $table->integer('Expired');
            $table->integer('warranty');
            $table->integer('ExpiredSNI');
            $table->integer('WarrantySNI');
            $table->date('CreatedDate');
            $table->integer('Status');
            $table->float('panjang');
            $table->float('lebar');
            $table->float('tinggi');
            $table->string('fire_rating');
            $table->string('media');
            $table->string('type');
            $table->string('kapasitas');
            $table->string('kelas_kebakaran');
            $table->string('tabung_silinder');
            // Tambahkan kolom lainnya sesuai kebutuhan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
