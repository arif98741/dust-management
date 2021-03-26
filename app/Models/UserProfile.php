<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = [
      'user_id','mobile','address'
    ];

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }


}
