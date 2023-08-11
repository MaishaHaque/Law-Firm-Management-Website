<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Backend\CaseDetailsController;
use App\Http\Controllers\Backend\AssignedCaseController;


#-----------

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Admin Group Middleware
Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard'); #admin dashboard

    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout'); #admin logout

    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile'); #admin profile

    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store'); #admin profile store

    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');   #admin change pass
    
    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');   #admin pass update

    

    //Route::view('/admin/list','lists.caselist');
    
}); //end group admin middleware

Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login'); #admin login

Route::get('/lawyer/login', [LawyerController::class, 'LawyerLogin'])->name('lawyer.login'); #lawyer login
//=================================================================================================================================================



Route::middleware(['auth','role:lawyer'])->group(function(){
    Route::get('/lawyer/dashboard', [LawyerController::class, 'LawyerDashboard'])->name('lawyer.dashboard'); #lawyer dashboard

    Route::get('/lawyer/logout', [LawyerController::class, 'LawyerLogout'])->name('lawyer.logout'); #lawyer logout

    Route::get('/lawyer/profile', [LawyerController::class, 'LawyerProfile'])->name('lawyer.profile'); #lawyer profile

    Route::get('/lawyer/change/password', [LawyerController::class, 'LawyerChangePassword'])->name('lawyer.change.password');   #lawyer change pass

    Route::post('/lawyer/update/password', [LawyerController::class, 'LawyerUpdatePassword'])->name('lawyer.update.password');   #lawyer pass update
}); //end group lawyer middleware








//=================================================================================================================================================
Route::middleware(['auth','role:managing partner'])->group(function(){
    Route::get('/manage/dashboard', [ManageController::class, 'ManageDashboard'])->name('manage.dashboard'); #managing partner dashboard
}); //end group manage middlewar





//Admin Group Middleware--------------------------------------------------------------------------------------
Route::middleware(['auth','role:admin'])->group(function(){
    

    
    Route::controller(CaseDetailsController::class)->group(function(){
        
        Route::get('/edit/case/{id}','EditCase' )->name('edit.case'); #edit case to db 
        Route::post('/edit/assignedcase','EditAssignedCase' )->name('editas.case'); #add new case to db
        Route::post('/store/case','StoreCase' )->name('store.case'); #add new case to db
        Route::get('/nowitness/cases','NoWitnessCases' )->name('no.witness.cases'); #no witness case list
    });




    

    //Route::view('/admin/list','lists.caselist');
    
}); //end group admin middleware


Route::middleware(['auth','role:lawyer'])->group(function(){
    

    
    Route::controller(CaseDetailsController::class)->group(function(){

        Route::get('/all/cases','AllCases' )->name('all.cases'); #all case list
        Route::get('/add/case','AddCase' )->name('add.case'); #add case page
        
        Route::post('/edit/assignedcase','EditAssignedCase' )->name('editas.case'); #add new case to db

        
        Route::get('/edit/case/{id}','EditCase' )->name('edit.case'); #edit case to db


        Route::get('/details/case/{id}','InfoCase' )->name('info.case'); #case details

        Route::get('/assigned/cases','AssignedCases' )->name('assigned.cases'); #assigned case list
    });

}); //end group Lawyer middleware