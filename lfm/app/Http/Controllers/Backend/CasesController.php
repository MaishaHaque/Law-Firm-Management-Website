<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CaseList;
use App\Models\User;

class CasesController extends Controller
{
    //
    public function Lawyers(){
        $data = User::where('role', 'lawyer')->latest()->get();
        return view('firmleader.backend.lawyers',compact('data'));

    }

    public function CaseList(){
        $value = CaseList::latest()->get();
        return view('firmleader.backend.case_lists',compact('value'));

    }

    public function EditCases($id){
      $data = CaseList::findOrFail($id);
      return view('firmleader.backend.edit_cases',compact('data'));  
    }


    public function UpdateCase(Request $request){


      $pid = $request->id;


      CaseList::findOrFail($pid)->update([
        
        'Assigned_Lawyer_1_ID' => $request->Assigned_Lawyer_1_ID,
        'Assigned_Lawyer_2_ID' => $request->Assigned_Lawyer_2_ID,
        'status' => $request->status


      ]);

      $notification = array(
        'message' => 'Updated successfully!'
        


      );
      return redirect()->route('case.lists')->with($notification);
      

    }


    


}