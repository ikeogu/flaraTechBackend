<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reconcilation extends Model
{
    use HasFactory;
    protected $fillable = ['radio_id','amount','status','paid_by','description'];


    public function radio(){
        return $this->belongsTo(Radio::class);
    }
}

