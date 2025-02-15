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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('profile_image')->nullable();
            $table->date('date_of_birth');
            $table->integer('number')->default(0);
            $table->string('position');
            $table->date('joined')->nullable();
            $table->date('contract_until')->nullable();
            $table->integer('market_value')->nullable();
            $table->integer('age');
            $table->decimal('height');
            $table->string('foot');
            $table->string('nationality')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
