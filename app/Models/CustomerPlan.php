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
        'uuid',
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
