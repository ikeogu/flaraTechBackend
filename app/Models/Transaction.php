<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public const TYPES = ['income', 'expense'];
    public const ACCOUNT_TYPES = ['giving', 'financial'];
    public const STATUS = ['pending', 'valid', 'invalid'];

    protected $fillable = [
        'church_id',
        'title',
        'type',
        'account_id',
        'account_type',
        'status',
        'date',
        'amount',
        'description',
    ];

    public function account()
    {
        return $this->morphTo();
    }

    public function financial_account()
    {
        if (!$this->account_type == 'financial') return null;
        return $this->belongsTo(FinancialAccount::class, 'account_id');
    }
}
