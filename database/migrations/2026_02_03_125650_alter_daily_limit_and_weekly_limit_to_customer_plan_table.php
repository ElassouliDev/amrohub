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
        Schema::table('customer_plans', function (Blueprint $table) {
            $table->integer('daily_limit')->default(0); // in minutes
            $table->integer('weekly_limit')->default(0); // in  minutes
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('customer_plans', function (Blueprint $table) {
            $table->dropColumn('daily_limit');
            $table->dropColumn('weekly_limit');
        });
    }
};
