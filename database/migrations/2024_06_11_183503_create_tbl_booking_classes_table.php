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
        Schema::create('tbl_booking_classes', function (Blueprint $table) {
            $table->id('id_booking_class');
            $table->foreignId('id_booking')->constrained('tbl_bookings', 'id_booking')->onDelete('cascade');
            $table->foreignId('id_class')->constrained('tbl_classes', 'id_class')->onDelete('cascade');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_booking_classes');
    }
};
