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
            $table->text('description');
            $table->decimal('price', 15, 2);
            $table->enum('currency', ['USD', 'EUR', 'NIS'])->default('NIS');
            $table->decimal('surface_area', 8, 2);
            $table->integer('rooms');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->integer('toilets');
            $table->integer('construction_year')->nullable();
            $table->date('free_date')->nullable();
            $table->enum('type', ['Apartment', 'Villa', 'Duplex', 'Triplex', 'Penthouse', 'Cottage/House']);
            $table->boolean('is_rented')->default(false);
            $table->boolean('is_sold')->default(false);
            $table->string('city');
            $table->string('region')->nullable();
            $table->string('address');
            $table->boolean('is_exact_address')->default(true);
            $table->boolean('parking')->default(false);
            $table->boolean('balcony')->default(false);
            $table->boolean('terrace')->default(false);
            $table->boolean('elevator')->default(false);
            $table->boolean('accessible')->default(false);
            $table->boolean('air_conditioner')->default(false);
            $table->boolean('pool')->default(false);
            $table->boolean('furnished')->default(false);
            $table->boolean('exclusivity')->default(false);
            $table->boolean('is_exceptional')->default(false);
            $table->foreignId('agent_id')->nullable()->constrained('users')->onDelete('cascade');
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
