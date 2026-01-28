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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->string('university')->nullable();
            $table->string('specialization')->nullable();
            $table->string('university_id')->nullable();
            $table->enum('user_type', ['student', 'academic', 'freelancer', 'other'])->default('freelancer');
            $table->boolean('account_status')->default(true); // true = active, false = inactive
            $table->string('id_image_path')->nullable();
            $table->foreignId('plan_id')->nullable()->nullOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
