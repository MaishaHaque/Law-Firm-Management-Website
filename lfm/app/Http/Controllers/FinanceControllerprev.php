<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\CaseDetails;
Use Illuminate\Support\Facades\Hash;;
use Illuminate\Http\RedirectResponse;

class FinanceController extends Controller
{
    public function FinanceDashboard(){
        $totalInc = CaseDetails::sum('Paid');
        return view('finance.index', compact('totalInc')); 
    }

    public function FinanceLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    } //End method

    public function FinanceLogin(){
        return view('finance.finance_login');
    } //End method


    public function FinanceProfile(){
        $id= Auth::user()->id;
        $profileData= User::find($id);
        return view('finance.finance_profile_view',compact('profileData'));


    }//End Method

    public function FinanceChangePassword(){

        $id= Auth::user()->id;
        $profileData= User::find($id);

        return view('finance.finance_change_password',compact('profileData'));
    
    } //end method


    public function FinanceUpdatePassword(Request $request){
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

    }//End Method//
}
