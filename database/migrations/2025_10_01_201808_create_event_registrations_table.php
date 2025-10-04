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
        Schema::create('event_registrations', function (Blueprint $table) {
            // $table->id();
            $table->uuid('id')->primary();
            $table->uuid('user_id')->nullable();
            $table->uuid('event_id')->nullable();
            $table->integer('package_id')->nullable();
            $table->integer('payment_method_id')->nullable();
            $table->string('invoice_number')->nullable();
            $table->uuid('event_ticket_id')->nullable();
            $table->integer('status_id')->default(1);
            $table->integer('require_formal_invitation')->nullable();
            $table->longText('address_invitation_to')->nullable();
            $table->string('student_id')->nullable();
            $table->string('other_position')->nullable();
            $table->string('mode_of_attendance_id')->nullable();
            $table->string('will_present')->nullable();
            $table->string('session_to_present_id')->nullable();
            $table->string('abstract')->nullable();
            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_registrations');
    }
};
