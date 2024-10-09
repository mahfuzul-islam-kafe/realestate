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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->decimal('price', 10, 2); 
            $table->text('description');
            $table->foreignId('property_type')->nullable();
            $table->integer('total_surface')->nullable();
            $table->integer('surface_build')->nullable();
            $table->integer('floor_count')->default(0);
            $table->integer('rooms_count')->default(0);
            $table->integer('bath_count')->default(0);
            $table->integer('balcony_count')->default(0);
            $table->timestamp('entry_date')->nullable(); 
            $table->string('city')->nullable();
            $table->foreignId('entry_condition')->nullable();
            $table->foreignId('property_condition')->nullable();
            $table->foreignId('ad_type')->nullable();
            $table->text('address')->nullable();
            $table->integer('car_park_count')->default(0);
            $table->json('map'); 
            $table->boolean('multimedia')->default(false);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
