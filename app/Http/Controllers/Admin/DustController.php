<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DustRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DustController extends Controller
{

    public function Dustrequest()
    {
        $data = [
            'requests' => DustRequest::with(['user', 'driver'])
                ->orderBy('id', 'desc')
                ->get()
        ];
        return view('backend.admin.dust-request')->with($data);
    }

}
