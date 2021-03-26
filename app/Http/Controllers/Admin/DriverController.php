<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = [
            'drivers' => User::with('user_profile')
                ->where([
                    'role' => 2
                ])->orderBy('name')
                ->get()
        ];

        return view('backend.admin.driver.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.admin.driver.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [

            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:20',
            'mobile' => 'required|min:11|max:20|unique:user_profiles',
            'address' => 'required',
        ]);

        $data['password'] = bcrypt($request->getPassword());
        $data['role'] = 2;
        $user = User::create($data);
        UserProfile::create([
            'user_id' => $user->id,
            'mobile' => $request->mobile,
            'address' => $request->address
        ]);
        $request->session()->flash('alert-success', 'User was successful added!');
        return redirect()->route('admin.driver.index');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $driver
     * @return Response
     */
    public function edit(User $driver)
    {
        $data = [
            'driver' => $driver
        ];

        return view('backend.admin.driver.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param User $driver
     * @return Response
     * @throws ValidationException
     */
    public function update(Request $request, User $driver): Response
    {
        $data = $this->validate($request, [

            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $driver->id,
            'mobile' => 'required|min:11|max:20',
            'address' => 'required',
        ]);

        $driver->save($data);

        $userProfile = UserProfile::where('user_id', $driver->id)->first();
        $userProfile->save([
            'mobile' => $request->mobile,
            'address' => $request->address
        ]);
        $request->session()->flash('alert-success', 'User was successful updated!');
        return redirect()->route('admin.driver.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
