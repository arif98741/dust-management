<?php

namespace App\Http\Controllers;

use App\Models\DustRequest;
use App\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('web');
    }

    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return Renderable
     */
    public function index(Request $request)
    {
        $data = [
            'total_pending' => DustRequest::where('status', 'pending')->count(),
            'total_completed' => DustRequest::where('status', 'completed')->count(),
            'total_driver' => User::where('role', 2)->count(),
            'total_user' => User::where('role', 3)->count(),
        ];
        //     return $data;

        return view('home')->with($data);
    }

    public function userRegister(Request $request)
    {

        return view('user-register');
    }

    public function seeDustRequest()
    {
        $data = [
            'requests' => DustRequest::with(['user'])
                ->orderBy('id', 'desc')
                ->get()
        ];
        return view('see-dust-request')->with($data);
    }

    public function saveUser(Request $request)
    {

        $this->validate($request, [

            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:20',
        ]);

        $data = $request->all();
        $data['role'] = 3;
        $data['password'] = bcrypt($request->password);
        User::create($data);

        $request->session()->flash('alert-success', 'Your register is successful');
        return redirect('login');

    }

}
