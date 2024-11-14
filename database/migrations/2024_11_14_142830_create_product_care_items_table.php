<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_care_items', function (Blueprint $table): void {
            $table->id(); // primary key
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade'); // relasi ke tabel product
            $table->foreignId('product_care_id')->constrained('product_cares')->onDelete('cascade'); // relasi ke tabel product_care
            $table->string('serial_number', 45);
            $table->string('maintenance_count', 45);
            $table->string('refill_count', 45);

            // Foreign key constraints
            // $table->foreignId('product_id')->references('id')->on('product')->onDelete('cascade');
            // $table->foreignId('product_care_id')->references('id')->on('product_care')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_care_items');
    }
};
