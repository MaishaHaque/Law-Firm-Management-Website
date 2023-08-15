<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseDetails extends Model
{
    use HasFactory;
    //protected $gaurded =[];
    protected $fillable=['Client_Name','Files','Judge','Opposition_Lawyer','Next_Court_Date' ,'Opposition','Witness'];

    public $table= "case_details";
}
