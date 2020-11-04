<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomeSearch;
use App\Models\role;
use App\Models\subscribers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Models\Permission as ModelsPermission;
use Spatie\Permission\Models\Role as ModelsRole;
use HasRoles;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function search(HomeSearch $request)
    {
        return $request;
    }
    public function subscribe(Request $request)
    {
        $validatedate = $request->validate([
            'email' => 'required|email',
        ]);

        // dd($request->email);
        $subscribe = subscribers::create($request->all());
        return redirect()->back()->with('subscribe','Subscribtion Successfull!!!');

    }
    public function doctors()
    {
        return view('doctor.index');
    }
    public function clinics()
    {
        return view('clinic.index');
    }
}
