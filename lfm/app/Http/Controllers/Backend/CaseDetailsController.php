<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CaseDetails;

class CaseDetailsController extends Controller
{
    public function AllCases(){
        $acases= CaseDetails::latest()->get();
        return view('admin.backend.cases.all_cases',compact('acases'));
    }
    //=========================================
    public function NoWitnessCases(){
        $category = 'None';
        $nwcases = CaseDetails::where('Witness', $category)->get();
        //$users = DB::select('select * from users where active = ?', [1]);
 
        //return view('user.index', ['users' => $users]);
        return view('admin.backend.cases.no_witness_case',compact('nwcases'));
    }
    //

    //

    public function AddCase(){
        return view('admin.backend.cases.add_case');
    }

    public function StoreCase(Request $request){
        //Validation
        $request->validate([
            'Client_Name' => 'required',
            // 'Assigned_Lawyer_1_ID' => 'required',
            // 'Assigned_Lawyer_2_ID'=> 'required',
            // 'Paralegal_ID' => 'required',
            'Opening_Date' => 'required',
            // 'Closing_Date'=> 'required',
            // 'Files' => 'required',
            // 'Judge' => 'required',
            // 'Opposition_Lawyer'=> 'required',
            // 'Next_Court_Date' => 'required',
            // 'Opposition' => 'required',
            // 'Witness'=> 'required',
        ]);

        CaseDetails::insert([
            'Client_Name' => $request->Client_Name,
            'Assigned_Lawyer_1_ID' => $request->Assigned_Lawyer_1_ID,
            'Assigned_Lawyer_2_ID'=> $request->Assigned_Lawyer_2_ID,
            'Paralegal_ID' => $request->Paralegal_ID,
            'Opening_Date' => $request->Opening_Date,
            'Closing_Date'=> $request->Closing_Date,
            'Files' => $request->Files,
            'Judge' => $request->Judge,
            'Opposition_Lawyer'=> $request->Opposition_Lawyer,
            'Next_Court_Date' => $request->Next_Court_Date,
            'Opposition' => $request->Opposition,
            'Witness'=> $request->Witness,
        ]);


        $notification = array(
            'message' => 'Case Added Successfully!!!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.cases')->with($notification);

    }

    public function assignedCase(){
        $data=CaseDetails::select('Client_Name','Client_Email')->get();
        return $data;
    }


    
    public function  AssignedCases(){
        $id= Auth::user()->id;
        $asscases= CaseDetails::where('Assigned_Lawyer_1_ID', $id)->get();
        //$users = DB::select('select * from users where active = ?', [1]);
 
        //return view('user.index', ['users' => $users]);
        return view('lawyer.backend.cases.\assigned_cases',compact('asscases'));
    }
    //

    public function EditCase($id){
        $ecases=CaseDetails::findOrFail($id);
        return view('lawyer.backend.cases.edit_case',compact('ecases'));
    }// end method


    public function EditAssignedCase(Request $request){
        //Validation

        $pid=$request->id;

        CaseDetails::findOrFail($pid)->update([
            'Client_Name' => $request->Client_Name,
            'Files' => $request->Files,
            'Judge' => $request->Judge, 
            'Opposition_Lawyer' => $request->Opposition_Lawyer,
            'Next_Court_Date' => $request->Next_Court_Date,
            'Opposition' => $request->Opposition,
            'Witness' => $request->Witness,
        ]);

        $notification = array(
            'message' => 'Case Updated Successfully!!!',
            'alert-type' => 'success'
        );

        return redirect()->route('assigned.cases')->with($notification);

    }

    

    public function InfoCase($id){
    
        $dcases=CaseDetails::findOrFail($id);
        //$dcases= CaseDetails::latest()->get($id);
        return view('lawyer.backend.cases.details_case',compact('dcases'));
        //return view('lawyer.backend.cases.edit_case',compact('ecases'));


    }
   
}
