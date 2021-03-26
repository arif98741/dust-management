<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use App\Models\DustRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DriverController extends Controller
{

    public function index()
    {
        return view('backend.driver.dashboard');
    }

    /**
     * @return Application|Factory|View
     */
    public function request()
    {
        $data = [
            'requests' => DustRequest::with(['user', 'driver'])
                ->whereIn('status', ['pending','accepted'])
                ->orderBy('id', 'desc')
                ->get()
        ];

        return view('backend.driver.request')->with($data);
    }


    /**
     * @param Request $request
     * @param $id
     * @return Application|Factory|View
     */
    public function AcceptRequest(Request $request, $id)
    {
        $dust = DustRequest::find($id);
        $dust->status = 'accepted';
        if ($dust->save()) {
            $request->session()->flash('alert-success', 'Request accepted successfully');
            return redirect('driver/request');
        }

        return view('backend.driver.request')->with($data);
    }


}
