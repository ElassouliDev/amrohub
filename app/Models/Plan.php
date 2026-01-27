<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    use HasFactory  , SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'plan_type',
        'daily_limit',
        'weekly_limit',
        'monthly_limit',
        'total_hours',
        'duration',
        'start_date',
        'end_date',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_plans')
            ->withPivot(['remaining_hours', 'used_hours', 'start_date', 'end_date', 'status'])
            ->withTimestamps();
    }

    public function usageLogs()
    {
        return $this->hasMany(UsageLog::class);
    }
}
