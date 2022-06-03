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
    public function assigned_tracks()
    {
        return $this->belongsToMany(Media::class,'media_radio', 'radio_id','media_id');
    }

    public function reconcilation(){
        return $this->hasMany(Reconcilation::class, 'radio_id');
    }
    
    public function share_formular(){
        return $this->hasOne(SharingFormular::class);
    }
}
