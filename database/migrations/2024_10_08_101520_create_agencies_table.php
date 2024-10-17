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
        Schema::create('agencies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agent_id')->constrained('users', 'id')->cascadeOnDelete();
            $table->string('logo')->nullable();
            $table->string('agency_name')->nullable();
            $table->string('license_number')->nullable();
            $table->string('office_address')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('website')->nullable();
            $table->json('schedule')->nullable();
            $table->text('profile_description')->nullable();
            $table->boolean('is_verified')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agencies');
    }
};
