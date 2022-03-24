<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'record_label',
        'stage_name',
        'twitter_handle',
        'instagram',
        'phone_number',
        'user_id',
        'image'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
