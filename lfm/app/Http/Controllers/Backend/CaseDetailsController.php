<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CaseDetails;
use App\Models\User;
use App\Models\OtherExpense;

//Admin functions =========================================================================================
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


    public function EditAdminCase($id){
        $eacases=CaseDetails::findOrFail($id);
        
        return view('admin.backend.cases.edit_admin_case',compact('eacases'));
    }// end method

    public function UpdateAdminCase(Request $request){
        //Validation

        $aid=$request->id;

        CaseDetails::where('id',$aid)->update([
            'Client_Name' => $request->Client_Name,
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

        return redirect()->route('all.cases')->with($notification);

    }//end method

    public function AddEmployeeNew(){
        return view('admin.backend.cases.add_employee');
    }

    public function StoreEmployee(Request $request){

        //Validation
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'username' => 'required',
            'role' => 'required',
            'position' => 'required',

            
        ]);

        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'username'=> $request->username,
            'role' => $request->role,
            'position' => $request->position,
        ]);


        $notification = array(
            'message' => 'Case Added Successfully!!!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.employee')->with($notification);

    }


    public function AllEmployee(){
        $aemp= User::latest()->get();
        return view('admin.backend.cases.all_employee',compact('aemp'));
    }

    //----------------------------------------------------------------------------


    



    



    

    //============= Laywer ================================================================= 
    public function assignedCase(){
        $data=CaseDetails::select('Client_Name','Client_Email')->get();
        return $data;
    }

    public function CountCases(){
        $id= Auth::user()->id;
        
        $totalacases = CaseDetails::where('Assigned_Lawyer_1_ID', $id)->orwhere('Assigned_Lawyer_2_ID', $id)->count();
        
        $totalo1cases = CaseDetails::where('Assigned_Lawyer_1_ID', $id)->where('Assign_Status', "Ongoing")->count();
        $totalo2cases = CaseDetails::where('Assigned_Lawyer_2_ID', $id)->where('Assign_Status', "Ongoing")->count();
        $totalocases=$totalo1cases+$totalo2cases;

        $totalc1cases = CaseDetails::where('Assigned_Lawyer_1_ID', $id)->where('Assign_Status', "Completed")->count();
        $totalc2cases = CaseDetails::where('Assigned_Lawyer_2_ID', $id)->where('Assign_Status', "Completed")->count();
        $totalccases=$totalc1cases+$totalc2cases;
        return view('lawyer.index', compact('totalacases','totalocases','totalccases')); 
    }


    
    public function  AssignedCases(){
        $id= Auth::user()->id;
        $asscases= CaseDetails::where('Assigned_Lawyer_1_ID', $id)->orwhere('Assigned_Lawyer_2_ID', $id)->get();
        //$users = DB::select('select * from users where active = ?', [1]);
 
        //return view('user.index', ['users' => $users]);
        return view('lawyer.backend.cases.\assigned_cases',compact('asscases'));
    }
    //

    public function EditCase($id){
        $ecases=CaseDetails::findOrFail($id);
        $comp="Completed";
        $ong="Ongoing";
        return view('lawyer.backend.cases.edit_case',compact('ecases','ong','comp','id'));
    }// end method



    public function EditAssignedCase(Request $request){
        //Validation

        $pid=$request->id;

        
        
        CaseDetails::where('id',$pid)->update([
            'Client_Name' => $request->Client_Name,
            'Files' => $request->Files,
            'Judge' => $request->Judge, 
            'Opposition_Lawyer' => $request->Opposition_Lawyer,
            'Next_Court_Date' => $request->Next_Court_Date,
            'Opposition' => $request->Opposition,
            'Witness' => $request->Witness,
            'Assign_Status' => $request->Assign_Status,
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

    //==========================Firmleader=====================================================




    //======Finances============================================================================
    public function Calc(){
        $totalInc = CaseDetails::sum('Paid');
        $totalSal = User::sum('Salary');
        $totalSpent = OtherExpense::sum('Amount');

        $totalExp = $totalSal + $totalSpent;
        $profit = $totalInc - $totalExp;
        $calc = [$totalInc, $totalExp, $profit];
        return view('finance.index', compact('calc')); 
    }

    //case fees +++++++++++++++++++++++++++++++++++++++++++++++++++
    public function AllCasesFees(){
        $afcases= CaseDetails::latest()->get();
        return view('finance.backend.cases.all_cases_fees',compact('afcases'));

    }

    public function EditFeesCase($id){
        $efcases=CaseDetails::findOrFail($id);
        return view('finance.backend.cases.edit_case_fees',compact('efcases'));
    }// end method


    public function UpdateCaseFees(Request $request){
        //Validation

        $fid=$request->id;
        //dd($request);
        CaseDetails::where('id',$fid)->update([
            'Total_Fees' => $request->Total_Fees,
            'Paid' => $request->Paid, 
            'Due' => $request->Total_Fees - $request->Paid,    
        ]);

        $notification = array(
            'message' => ' Updated Successfully!!!',
            'alert-type' => 'success'
        );
        return redirect()->route('allcase.fees')->with($notification);
    }//end method


    public function InfoCaseFees($iid){
    
        $dfcases=CaseDetails::findOrFail($iid);
        return view('finance.backend.cases.details_case',compact('dfcases'));
        


    } //end method


    //All employee +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

    //lawyer fees functions ************************************** EditFeesLawyer
    public function AllLawyerFees(){
        $alllawfees= User::where('role', "lawyer")->get();
        return view('finance.backend.employee.lawyer.all_law_fees',compact('alllawfees'));
    }//end method 

    public function InfoLawyerFees($ld){
    
        $dlfcases=User::findOrFail($ld);
        return view('finance.backend.employee.lawyer.details_law_case',compact('dlfcases'));
    } //end method

    public function EditFeesLawyer($id){
        $elfcases=User::findOrFail($id);
        return view('finance.backend.employee.lawyer.edit_lawyer_fees',compact('elfcases'));
    }// end method

    public function UpdateLawyerFees(Request $request){
        //Validation
        $fid=$request->id;
        User::where('id',$fid)->update([
            'salary' => $request->salary,
            'position' => $request->position,   
        ]);

        $notification = array(
            'message' => ' Salary Updated Successfully!!!',
            'alert-type' => 'success'
        );
        return redirect()->route('alllaw.fees')->with($notification);
    }//end method

    

    //admin fees functions ************************************** 
    public function AllAdminFees(){
        $alladfees= User::where('role', "admin")->get();
        return view('finance.backend.employee.admin.all_admin_fees',compact('alladfees'));
    }//end method

    public function InfoAdminFees($ad){
    
        $dafcases=User::findOrFail($ad);
        return view('finance.backend.employee.admin.details_admin_case',compact('dafcases'));
    } //end method


    public function EditFeesAdmin($id){
        $eafcases=CaseDetails::findOrFail($id);
        return view('finance.backend.employee.admin.edit_admin_fees',compact('eafcases'));
    }// end method

    public function UpdateAdminFees(Request $request){
        //Validation
        $fid=$request->id;
        User::where('id',$fid)->update([
            'salary' => $request->salary,
            'position' => $request->position,   
        ]);

        $notification = array(
            'message' => ' Salary Updated Successfully!!!',
            'alert-type' => 'success'
        );
        return redirect()->route('alladmin.fees')->with($notification);
    }//end method

//Managing Partner fees functions ************************************** 
    public function AllManageFees(){
        
       
        $allmpfees= User::where('role', "managing partner")->get();
      
        return view('finance.backend.employee.manage.all_manage_fees',compact('allmpfees'));
    }//end method

    public function InfoManageFees($ad){
    
        $dmfcases=User::findOrFail($ad);
        return view('finance.backend.employee.manage.details_manage_case',compact('dmfcases'));
    } //end method


    public function EditFeesManage($id){
        $emfcases=User::findOrFail($id);
        return view('finance.backend.employee.manage.edit_manage_fees',compact('emfcases'));
    }// end method

    public function UpdateManageFees(Request $request){
        //Validation
        $fid=$request->id;
        User::where('id',$fid)->update([
            'salary' => $request->salary,
            'position' => $request->position,   
        ]);

        $notification = array(
            'message' => ' Salary Updated Successfully!!!',
            'alert-type' => 'success'
        );
        return redirect()->route('allmanp.fees')->with($notification);
    }//end method

//Finance fees functions ************************************** 
    public function AllFinFees(){
        
       
        $allfinancefees= User::where('role', "finance")->get();
      
        return view('finance.backend.employee.finance.all_finance_fees',compact('allfinancefees'));
        

    }//end method

    public function InfoFinanceFees($ad){
    
        $dffcases=User::findOrFail($ad);
        return view('finance.backend.employee.finance.details_finance_case',compact('dffcases'));
    } //end method


    public function EditFeesFinance($id){
        $effcases=User::findOrFail($id);
        return view('finance.backend.employee.finance.edit_finance_fees',compact('effcases'));
    }// end method

    public function UpdateFinanceFees(Request $request){
        //Validation
        $fid=$request->id;
        User::where('id',$fid)->update([
            'salary' => $request->salary,
            'position' => $request->position,   
        ]);

        $notification = array(
            'message' => ' Salary Updated Successfully!!!',
            'alert-type' => 'success'
        );
        return redirect()->route('allfin.fees')->with($notification);
    }//end method

    public function AllOtherExp(){
        $allexp = OtherExpense::get();
        return view('finance.backend.otherExp.all_other_exp', compact('allexp'));
    }

    public function AddExp(){
        return view('finance.backend.otherExp.add_exp');
    }

    public function StoreExp(Request $request){
        OtherExpense::insert([
            'Expenditure'=> $request->Expenditure,
            'Amount'=> $request->Amount
        ]);


        $notification = array(
            'message' => 'Expense Added Successfully!!!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.exp')->with($notification);
    }
   
}
