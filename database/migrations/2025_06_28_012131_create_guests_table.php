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
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->string('reservation_number');
            $table->string('confirmation_number');
            $table->string('first_name');
            $table->string('last_name');
            $table->dateTime('arrival_date');
            $table->dateTime('departure_date');
            $table->integer('nr_nights');
            $table->string('room_type');
            $table->boolean('check_in_status')->default(false);
            $table->json('extras')->nullable();
            $table->string('payment_status')->nullable();
            $table->double('paid_amount')->nullable();
            $table->string('check_type')->nullable();
            $table->dateTime('payment_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests');
    }
};
