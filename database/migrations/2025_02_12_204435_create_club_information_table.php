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
        Schema::create('club_information', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('name_abbreviation');
            $table->string('description');
            $table->string('sponsor_name');
            $table->string('owner_name');
            $table->integer('total_titles_won');
            $table->string('date_of_establishment');
            $table->string('stadium_name');
            $table->string('stadium_address');
            // $table->string('stadium_capacity'); //70000
            $table->string('president_name');
            $table->string('captain_name');
            $table->string('coach_name');
            $table->string('founder_name');
            $table->string('country');
            $table->string('city');
            $table->string('logo');
            $table->string('color_code');
            $table->decimal('budget');
            $table->boolean('is_professional')->default(true);
            $table->string('website_link');
            $table->string('facebook_link');
            $table->string('instagram_link');
            $table->string('twitter_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('club_information');
    }
};
