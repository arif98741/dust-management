<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    protected $fillable = [
        'amount', 'payment_type', 'status','user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
