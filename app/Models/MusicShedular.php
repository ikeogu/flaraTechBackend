<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MusicShedular extends Model
{
    use HasFactory;
    protected $fillable = ['description', 'time_', 'days_', 'media_id', 'radio_id'];
}
