<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerPlan extends Model
{
    protected $fillable = [
        'customer_id',
        'plan_id',
        'start_date',
        'end_date',
        'status',
        'daily_limit',
        'weekly_limit',
        'uuid',
    ];
    protected $casts = [
        'customer_id' => 'integer',
        'plan_id' => 'integer',
        'daily_limit' => 'integer', //in minutes
        'weekly_limit' => 'integer', //in minutes
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
