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
        Schema::create('event_packages', function (Blueprint $table) {
            $table->id();
            $table->uuid('event_id')->nullable();
            $table->string('name');
            $table->string('alias')->nullable();
            $table->longText('description')->nullable();
            $table->string('currency_type')->nullable();
            $table->decimal('cost')->nullable();
            $table->timestamps();

            // $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_packages');
    }
};
