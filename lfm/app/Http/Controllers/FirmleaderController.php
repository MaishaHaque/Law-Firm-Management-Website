<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FirmleaderController extends Controller
{
    //
    public function FirmleaderDashboard(){
        return view('firmleader.index');
    }


     public function FirmleaderLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

    public function FirmleaderLogin(){
        return view('admin.admin_login');
    }

    public function FirmleaderProfile(){
        $id= Auth::user()->id;
        $profileData= User::find($id);
        return view('firmleader.firmleader_profile_view',compact('profileData'));


    }//End Method

    public function FirmleaderChangePassword(){

        $id= Auth::user()->id;
        $profileData= User::find($id);

        return view('firmleader.firmleader_change_password',compact('profileData'));
    
    } //end method

 


    public function FirmleaderUpdatePassword(Request $request){
        //Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);

        //Match The Old Password

        if (!Hash::check($request->old_password,auth::user()->password)) {

            $notification = array(
                'message' => 'Old Password Does not Match!!!',
                'alert-type' => 'error'
            );
        return back()->with($notification);
        
        }

        //Update the New Password

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        $notification = array(
            'message' => 'Password Change Successfully!!!',
            'alert-type' => 'success'
        );
    return back()->with($notification);

    }//End Method


    

}