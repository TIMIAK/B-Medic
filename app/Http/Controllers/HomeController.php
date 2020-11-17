<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomeSearch;
use App\Models\clinic;
use App\Models\doctor;
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
    // Function that displays the home page
    public function index()
    {
        return view('home');
    }
    // Function that perform searching
    public function search(HomeSearch $request)
    {
        return $request;
    }
    // Function that performs user subscription
    public function subscribe(Request $request)
    {
        $validatedate = $request->validate([
            'email' => 'required|email',
        ]);

        // dd($request->email);
        $subscribe = subscribers::create($request->all());
        return redirect()->back()->with('subscribe','Subscribtion Successfull!!!');

    }
    // Function that displays all doctors
    public function doctors()
    {
        $total_doctors = doctor::all();
        $doctors = doctor::paginate(6);
        return view('doctor.index',compact('doctors','total_doctors'));
    }
    // Function the displays all clinics
    public function clinics()
    {
        $total_clinics = clinic::all();
        $clinics = clinic::paginate(6);
        return view('clinic.index',compact('total_clinics','clinics'));
    }
    // Function that handles doctors details
    public function DoctorDetail(doctor $id)
    {
        $doctor = $id;
        return view('doctor.doctor-detail',compact('doctor'));
    }
}
