<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class AddEmployeeController extends Controller
{
    public function showAddEmployeeForm()
    {
        $employees = User::all();
        return view('admin.addemployee', compact('employees'));
    }

    public function addEmployee(Request $request)
    {
        info('Request data: ' . json_encode($request->all())); // Log request data
    
        $actionType = $request->input('actionType');
        info('Action type: ' . $actionType);
    
        if ($actionType === 'add') {
            $request->validate([
                'employeeNameInput' => 'required',
                'phone' => 'required',
                'address' => 'required',
                'role' => 'required',
                'position' => 'required',
            ]);
    
            $newEmployee = new User();
            $newEmployee->name = $request->input('employeeNameInput');
            $newEmployee->email = str_replace(' ', '', strtolower($newEmployee->name)) . '_lawfirm@gmail.com';
            $newEmployee->password = bcrypt('12345678');
            $newEmployee->phone = $request->input('phone');
            $newEmployee->address = $request->input('address');
            $newEmployee->role = $request->input('role');
            $newEmployee->position = $request->input('position');
            $newEmployee->save();
        }
        // If "Update Existing Employee" is selected
        elseif ($actionType === 'update') {
            $employeeId = $request->input('employeeName');
            $employee = User::find($employeeId);
            $employeeNameInputValue = $request->input('employeeNameInput');
            Log::info("Employee Name Input Value: " . $employeeNameInputValue);

    
            if ($request->filled('employeeNameInput')) {
                $employeeNameInputValue = $request->input('employeeNameInput');
                $employee->name = $employeeNameInputValue;
            }
            

            if ($employee) {
                if ($request->filled('phone')) {
                    $employee->phone = $request->input('phone');
                }
                
                if ($request->filled('address')) {
                    $employee->address = $request->input('address');
                }
                
                if ($request->filled('role')) {
                    $employee->role = $request->input('role');
                }
                
                if ($request->filled('position')) {
                    $employee->position = $request->input('position');
                }
                
                $employee->save();
            }
            info('Employee updated: ' . json_encode($employee));
        }
        
        // Redirect back with a success message or other appropriate action
        return redirect()->back()->with('success', 'Employee details added/updated successfully.');
    }
}
