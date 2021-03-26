<?php

namespace App;

use App\Models\DustRequest;
use App\Models\UserProfile;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return bool
     */
    public function isAdmin(): bool
    {
        $user = Auth::user();
        if ($user->id == 1) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return bool
     */
    public function isDriver(): bool
    {
        $user = Auth::user();
        if ($user->id == 2) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return bool
     */
    public function isUser(): bool
    {
        $user = Auth::user();
        if ($user->id == 3) {
            return true;
        } else {
            return false;
        }
    }

    public function user_profile()
    {
        return $this->hasOne(UserProfile::class)->withDefault();
    }

    public function dust_request()
    {

        return $this->hasMany(DustRequest::class);
    }
}
