<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DustRequest;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

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

    /**
     * @return Application|Factory|View
     */
    public function PaymentList()
    {
        $data = [
            'requests' => Payment::with(['user'])
                ->orderBy('id', 'desc')
                ->get()
        ];

        return view('backend.admin.payment-list')->with($data);
    }

    /**
     * @return Application|Factory|View
     */
    public function changePaymentStatus(Request $request, $id)
    {
        $payment = Payment::find($id);
        $payment->status = 'success';
        if ($payment->save()) {

            $request->session()->flash('alert-success', 'Payment status changed successfully');
        } else {
            $request->session()->flash('alert-error', 'Failed to change payment status');
        }
        return redirect('admin/payment-list');

    }

}
