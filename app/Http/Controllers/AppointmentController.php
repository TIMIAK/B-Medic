<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentRequest;
use App\Models\Appointment;
use App\Models\doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $doctor_details = [];
        $appointments = auth()->user()->appointments()->paginate(6);
        $user = Auth::user();
        for($i=0;$i<=count($appointments)-1; $i++){
            // echo $i;
            $doctor_detail  = doctor::find($appointments[$i]['doctor_id']);
            $doctor_details[] = $doctor_detail;
        }
        // return $doctor_details;

        return view('patients.appointments',compact('user','appointments','doctor_details'));
    }
    public function create(doctor $doctor)
    {
        $user = Auth::user();
        return view('patients.book-appointment',compact('doctor','user'));
    }
    public function store(AppointmentRequest $request,$doctor)
    {
        // return $doctor;
        // dd($request->all());
        $request['user_id'] = Auth::user()->id;
        $request['doctor_id'] = $doctor;
        $request['status'] = 'pending';
        Appointment::create($request->all());
        return redirect()->back()->with('success','Appointment Booked successfully!!');
    }
}
