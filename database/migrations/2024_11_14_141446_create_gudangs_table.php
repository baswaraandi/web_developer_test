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
        Schema::create('gudangs', function (Blueprint $table): void {
            $table->id();
            $table->string('Location', 255);
            $table->dateTime('CreatedAt');
            $table->integer('Created');
            $table->integer('Status');
            $table->string('NamaPerusahaan', 200);
            $table->text('Alamat');
            $table->string('Phone', 15);
            $table->string('Email', 255);
            $table->integer('IdProvince');
            $table->integer('IdRegencies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gudangs');
    }
};
