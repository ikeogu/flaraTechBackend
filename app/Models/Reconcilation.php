<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reconcilation extends Model
{
    use HasFactory;
    protected $fillable = ['radio_id','amount','status','paid_by','description','media_id','image_prove'];


    public function radio(){
        return $this->belongsTo(Radio::class);
    }
    
    public function media(){
        return $this->belongsTo(Media::class);
    }
}

