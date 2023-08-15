<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
Use Illuminate\Support\Facades\Hash;;
use Illuminate\Http\RedirectResponse;

class LawyerController extends Controller
{
    public function LawyerDashboard(){
        return view('lawyer.index'); 
    } //end method

    public function LawyerLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    } //End method

    public function LawyerLogin(){
        return view('admin.admin_login');
    } //End method


    public function LawyerProfile(){
        $id= Auth::user()->id;
        $profileData= User::find($id);
        return view('lawyer.lawyer_profile_view',compact('profileData'));


    }//End Method

    public function LawyerChangePassword(){

        $id= Auth::user()->id;
        $profileData= User::find($id);

        return view('lawyer.lawyer_change_password',compact('profileData'));
    
    } //end method


    public function LawyerUpdatePassword(Request $request){
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