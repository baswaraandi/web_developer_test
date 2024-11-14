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
        Schema::create('product_cares', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('gudang_id')->constrained('gudangs')->onDelete('cascade'); // Relasi ke tabel gudang
            $table->string('customer_name', 100);
            $table->string('phone_number', 13);
            $table->decimal('latitude_pickup', 9, 6);
            $table->decimal('longitude_pickup', 9, 6);
            $table->dateTime('product_care_date');
            $table->integer('total');
            $table->integer('payment_method');
            $table->integer('payment_status');
            $table->integer('product_care_type');
            $table->integer('product_care_status');
            $table->dateTime('created_at');
            $table->integer('created_by');
            $table->dateTime('pickup_at')->nullable();
            $table->integer('pickup_by')->nullable();
            $table->dateTime('delivered_at')->nullable();
            $table->integer('delivered_by')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->integer('updated_by')->nullable();
            
            // Foreign key constraint
            // $table->foreignId('gudang_id')->references('id')->on('gudang')->onDelete('cascade');

            // Indeks
            $table->index('gudang_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_cares');
    }
};
