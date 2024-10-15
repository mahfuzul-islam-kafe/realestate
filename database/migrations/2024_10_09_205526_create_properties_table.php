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
            $table->string('name');
            $table->string('number');
            $table->decimal('price', 10, 2); 
            $table->text('property_description');
            $table->foreignId('property_type');
            $table->integer('total_surface');
            $table->integer('surface_build');
            $table->integer('garden_surface')->nullable();
            $table->integer('payments')->nullable();
            $table->integer('arnona_for_2_months')->nullable();
            $table->integer('house_vaad')->nullable();
            $table->integer('total_floor')->default(0);
            $table->integer('sell_floor')->default(0);
            $table->integer('rooms_count')->default(0);
            $table->boolean('access_for_disabled')->default(false);
            $table->boolean('elevators')->default(false);
            $table->boolean('renovated')->default(false);
            $table->boolean('air_conditionner')->default(false);
            $table->boolean('furnitures_included')->default(false);
            $table->boolean('mamad')->default(false);
            $table->boolean('bars')->default(false);
            $table->boolean('unit')->default(false);
            $table->boolean('personal_mazgan')->default(false);
            $table->boolean('water_heater')->default(false);
            $table->boolean('kosher_kitchen')->default(false);
            $table->boolean('storage')->default(false);
            $table->date('sell_entry_date');
            $table->date('rent_entry_date')->nullable(); 
            $table->string('city');
            $table->string('balcony_count');
            $table->string('carpark_count');
            $table->boolean('ground_floor')->default(false);
            $table->string('street');
            $table->string('street_number');
            $table->string('area');
            $table->string('matterport_link')->nullable();
            $table->foreignId('property_condition')->nullable();    
            $table->boolean('immediately')->default(false);
            $table->boolean('flexible')->default(false);
            $table->boolean('long_term')->default(false);
            $table->boolean('is_mailable')->default(false);
            $table->boolean('is_suggestible')->default(false);
            
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
