<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherExpense extends Model
{
    use HasFactory;
    protected $fillable=['Expenditure', 'Amount'];

    public $table= "other_expenses";
}
