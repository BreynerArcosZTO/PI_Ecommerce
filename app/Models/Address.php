<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'user_id',
        'recipient_name',
        'phone',
        'country',
        'department',
        'city',
        'postal_code',
        'address_line_1',
        'address_line_2',
        'reference',
        'is_default',
        'payment_method',
        'status',
        'order_data',
    ];

    protected $casts = [
        'order_data' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
