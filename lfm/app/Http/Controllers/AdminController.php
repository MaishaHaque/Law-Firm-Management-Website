<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
Use Illuminate\Support\Facades\Hash;;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
    //
    public function AdminDashboard(){
        return view('admin.index');
    } //End method

    public function AdminLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    } //End method

    public function AdminLogin(){
        return view('admin.admin_login');
    } //End method

    public function AdminProfile(){
        $id= Auth::user()->id;
        $profileData= User::find($id);
        return view('admin.admin_profile_view',compact('profileData'));


    }//End Method

    public function AdminProfileStore(Request $request){

        $id= Auth::user()->id;
        $data= User::find($id);
        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        // $data->password = $request->password;

        if ($request->file('photo')){
            $file = $request->file('photo');
            @unlink(public_path('images/admin_images/'.$data->photo));
            $filename= date('YmdHi').$file->getClientOriginalName(); //232323.ariyan.png
            $file->move(public_path('images/admin_images'),$filename);
            $data['photo']=$filename;
        }

        $data->save();

        // $notification = array(
        //     'message' => 'Admin Profile Updated Sucessfully',
        //     'alert-type' => 'success'
        // );

        //return redirect()->back()->with($notification); 
        return redirect()->back();
    } //End Method


    public function AdminChangePassword(){

        $id= Auth::user()->id;
        $profileData= User::find($id);

        return view('admin.admin_change_password',compact('profileData'));

    }

    public function AdminUpdatePassword(Request $request){
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
