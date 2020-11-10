<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function dashboard()
    {
        $user = Auth::user();
        return view('patients.dashboard',compact('user'));
    }
    public function profile()
    {
        $user = Auth::user();
        return view('patients.profile',compact('user'));
    }
    public function profileupdate(Request $request)
    {
        Auth::user()->update($request->all());
        return redirect()->back()->with('profilesuccess','Profile Updated Successfully!!!');
        dd('Done');
    }
}
