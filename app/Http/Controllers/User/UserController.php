<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\DustRequest;
use App\Models\Payment;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

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

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function AddPayment(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $data['user_id'] = Auth::user()->id;

            Payment::create($data);
            $request->session()->flash('alert-success', 'Payment submitted successfully');
            return redirect('user/payment-list');
        }

        $data = [
        ];

        return view('backend.user.add-payment')->with($data);
    }

    public function PaymentList()
    {
        $data = [
            'requests' => Payment::with(['user'])
                ->where('user_id', Auth::user()->id)
                ->orderBy('id', 'desc')
                ->get()
        ];

        return view('backend.user.payment-list')->with($data);
    }


}
