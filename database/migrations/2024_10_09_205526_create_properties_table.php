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

            $table->foreignId('agency_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('type_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('condition_id')->nullable()->constrained()->nullOnDelete();

            $table->enum('listed_for', ['sell', 'rent']);

            $table->bigInteger('price')->nullable();
            $table->integer('payments')->nullable();
            $table->integer('arnona_for_2_months')->nullable();
            $table->integer('house_vaad')->nullable();
            
            $table->text('property_description')->nullable();
            $table->integer('total_floor')->nullable();
            $table->integer('sell_floor')->nullable();
            $table->integer('total_surface')->nullable();
            $table->integer('surface_build')->nullable();
            $table->integer('garden_surface')->nullable();
            $table->integer('rooms_count')->nullable();

            $table->boolean('access_for_disabled')->nullable();
            $table->boolean('elevators')->nullable();
            $table->boolean('renovated')->nullable();
            $table->boolean('air_conditionner')->nullable();
            $table->boolean('furnitures_included')->nullable();
            $table->boolean('mammad')->nullable();
            $table->boolean('bars')->nullable();
            $table->boolean('personal_mazgan')->nullable();
            $table->boolean('water_heater')->nullable();
            $table->boolean('kosher_kitchen')->nullable();
            $table->boolean('storage')->nullable();
            $table->boolean('ground_floor')->nullable();
            $table->boolean('unit')->nullable();
            
            $table->date('sell_entry_date')->nullable();
            $table->date('rent_entry_date')->nullable();
            $table->string('city')->nullable();
            
            $table->string('balcony_count')->nullable();
            $table->string('carpark_count')->nullable();
            $table->string('street')->nullable();
            $table->string('street_number')->nullable();
            $table->string('area')->nullable();
            $table->string('matterport_link')->nullable();
           
            $table->boolean('immediately')->nullable();
            $table->boolean('flexible')->nullable();
            $table->boolean('long_term')->nullable();
            $table->boolean('is_mailable')->nullable();
            $table->boolean('is_suggestible')->nullable();

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
