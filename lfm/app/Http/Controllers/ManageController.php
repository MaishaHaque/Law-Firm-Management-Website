<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function FirmleaderDashboard(){
        return view('firmleader.firmleader_dashboard'); 
    } //end method
}
