<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function ManageDashboard(){
        return view('manage.manage_dashboard'); 
    } //end method
}
