<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profit extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id', 'total'
    ];

    public function transaction() {
        return $this->belongsTo(Transaction::class);
    }
}

