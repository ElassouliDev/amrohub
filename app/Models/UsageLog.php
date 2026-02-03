<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsageLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'plan_id',
        'start_time',
        'end_time',
        'duration',
    ];

    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];




    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function customerPlan()
    {
        return $this->belongsTo(CustomerPlan::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
