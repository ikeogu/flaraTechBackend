<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Radio extends Model
{
    use HasFactory;
    protected $fillable = [
    
        'logo',
        'price',
        'state',
        'frequency',
        'acct_bal',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
