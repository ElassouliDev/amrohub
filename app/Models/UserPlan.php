<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class UserPlan extends Pivot
{
    use HasFactory;

    protected $table = 'user_plans';

    protected $fillable = [
        'user_id',
        'plan_id',
        'remaining_hours',
        'used_hours',
        'start_date',
        'end_date',
        'status',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];
}
