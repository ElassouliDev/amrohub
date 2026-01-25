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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->enum('plan_type', ['normal', 'campaign', 'other'])->default('normal'); // Adjust as needed
            $table->integer('daily_limit')->default(0); // in hours
            $table->integer('weekly_limit')->default(0); // in hours
            $table->integer('monthly_limit')->default(0); // in hours
            $table->integer('total_hours')->default(0); // Total hours available
            $table->integer('duration')->default(0)->comment('duration in days for month  31 days'); // Total hours available
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
