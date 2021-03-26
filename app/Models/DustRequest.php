<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DustRequest extends Model
{
    protected $fillable = [
        "dust_type",
        "amount",
        "collection_address",
        "my_availability",
        "user_id",
    ];

    public function getRequests()
    {
        DB::table('dust_request')
            ->join('dust_request', '', '', '', '', '');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_id', 'id')
            ->withDefault();
    }


}
