<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\DustRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('backend.admin.dashboard');
    }

    public function myRequest()
    {
        $data = [
            'requests' => DustRequest::with(['user', 'driver'])
               ->where('user_id', Auth::user()->id)
                ->orderBy('id', 'desc')
                ->get()
        ];

        return view('backend.user.my-request')->with($data);
    }

    public function addNewRequest()
    {
        return view('backend.user.add-new-request');
    }

    public function saveNewRequest(Request $request)
    {
        //  dd($request->all());
        $this->validate($request, [

            'dust_type' => 'required',
            'amount' => 'required',
            'dust_unit' => 'required',
            'collection_address' => 'required|min:6',
            'my_availability' => 'required',
        ]);

        $data = $request->all();
        $data ['amount'] = $request->amount . ' ' . $request->dust_unit;
        $data['user_id'] = Auth::user()->id;
        DustRequest::create($data);
        $request->session()->flash('alert-success', 'Your request was sent successfully');
        return redirect('user/my-request');


    }


}
