<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guest extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'reservation_number',
        'confirmation_number',
        'first_name',
        'last_name',
        'arrival_date',
        'departure_date',
        'nr_nights',
        'room_type',
        'check_in_status',
        'extras',
        'payment_status',
        'paid_amount',
        'check_type',
        'payment_date',
        'email',
        'phone',
        'country_code',
        'address',
        'city',
        'state',
        'zip_code',
    ];
}
