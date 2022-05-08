<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable =[
        'radio_stations_id',
        'media_id',
        'amount',
        'currency',
        'reference',
        'status',
        'transaction_id',
        'summed'

    ];
}
