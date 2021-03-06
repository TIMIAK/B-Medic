<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasswordResetRequest;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Appointment;
use App\Models\doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
// use ImageOptimizer;
use Spatie\ImageOptimizer\OptimizerChainFactory;

// Use Image intervention
use Intervention\Image\ImageManagerStatic as Image;



class UserController extends Controller
{
    //  Middleware for auth and email verification.
    public function __construct()
    {
       return $this->middleware('auth');
        // $this->middleware('optimizeImages')->only('profileupdate');
    }
    //  View User's Dashboard
    public function dashboard()
    {
        $user = Auth::user();
        $appointments = Auth::user()->appointments();
        // auth()->user()->appointments();
        // [id, do]
        // dd($appointments);
        $doctor_details = [];
        foreach($appointments as $appointment)
        {
            $doctor_detail  = doctor::find($appointment->doctor_id);
            $doctor_details[] = $doctor_detail;
        }
        return view('patients.dashboard',compact('user','appointments','doctor_details'));
    }

    //  View user's profile
    public function profile()
    {
        $user = Auth::user();
        return view('patients.profile',compact('user'));
    }
    //  Update user's profile
    public function profileupdate(ProfileUpdateRequest $request)
    {
        // return $request->all();
        if($request->hasFile('image'))
        {
            // dd($request->image);
            $filename = $request->image->getClientOriginalName();
            // Image Optimization
            $optimizerChain = OptimizerChainFactory::create();
            $optimizerChain->setTimeout(10)->optimize($request->image);
            // Image Intervention
            $image = $request->image;
            $path = $request->file('image')->getRealPath();
            $image = Image::make($path)->fit(370,250);
            // Delete old image if available
            $this->deleteOldImage();
            $store = Storage::put('public/images/'.$filename, $image->__toString());

            $request['avatar'] = $filename;
        }
        Auth::user()->update($request->all());
        return redirect()->back()->with('profilesuccess','Profile Updated Successfully!!!');

    }
    //  Funtion to delete old image if available during profile update
    protected function deleteOldImage(){
        if(Auth()->user()->avatar){
            Storage::delete('/public/images/'.Auth()->user()->avatar);
        }
    }
    // Change Password form
    public function changePassword()
    {
        $user = Auth::user();
        return view('patients.change-password',compact('user'));
    }
    //  Password reset
    public function passwordreset(PasswordResetRequest $request)
    {
        $user = Auth::user();
        $user_password = Auth::user()->password;
       if(Hash::check($request->old_password, $user_password))
       {
           $user->fill([
               'password' => Hash::make($request->new_password)
               ])->save();
           return redirect('/dashboard')->with('success','Password Changed Successfully!!!');
       }
       else{
        return redirect()->back()->with('error','Old password is invalid');
       }
    }
}
