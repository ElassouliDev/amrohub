<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Plan::create([
            'title'=>'100 hours  campaign',
            'daily_limit'=>120,
            'weekly_limit'=>240,
            'monthly_limit'=>960,
            'total_hours'=>1000,
            'plan_type'=>'campaign',

        ]);
    }
}
