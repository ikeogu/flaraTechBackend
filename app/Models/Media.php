<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Model
{
    use HasFactory;
    use SoftDeletes;

    public static $types = ['track', 'album'];

    protected $fillable = [
       'user_id','title','description','type','price','own_name','status'
    ];

    public function track()
    {
        return $this->hasOne(Track::class, 'media_id');
    }

    public function tracks()
    {
        return $this->hasMany(Track::class, 'media_id');
    }

    public function assigned_radioStation()
    {
        return $this->belongsToMany(Radio::class);
    }



}
