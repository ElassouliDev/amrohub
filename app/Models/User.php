<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'gender',
        'university',
        'specialization',
        'student_id',
        'user_type',
        'account_status',
        'id_image_path',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'account_status' => 'boolean',
        ];
    }

    public function plans()
    {
        return $this->belongsToMany(Plan::class, 'user_plans')
            ->withPivot(['remaining_hours', 'used_hours', 'start_date', 'end_date', 'status'])
            ->withTimestamps();
    }

    public function usageLogs()
    {
        return $this->hasMany(UsageLog::class);
    }

    public function joinRequests()
    {
        // Assuming join requests are linked by email if user not logged in, or we might need a user_id column if requests are from logged in users.
        // For now, based on schema, join requests have 'email', so we can't do a direct hasMany unless we add user_id to join_requests.
        // Or we can rely on email matching logic in controller.
        // If the requirement is "User Management... Join Requests" imply logged in users request plans?
        // The schema I made for join_requests has user details, implying it might be for NEW users or existing.
        // Let's stick to the implementation plan schema which didn't strictly link user_id. 
        // But wait, if I want to list a user's requests, matching by email is good.
        // existing user -> request plan.
        return $this->hasMany(JoinRequest::class, 'email', 'email');
    }
}
