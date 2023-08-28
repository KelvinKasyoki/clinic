<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Admincontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/' ,[HomeController::class,'index']);

Route::get('/home' ,[HomeController::class,'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});




/*
|--------------------------------------------------------------------------
|Front office-web content
|--------------------------------------------------------------------------
*/

//submit an appointment
Route::post('/appointment' ,[HomeController::class,'appointmentdata']);

//view submitted appointments
Route::get('/myappointment' ,[HomeController::class,'myappointment']);

//Delete submitted appointments
Route::delete('{id}/deletemyappointment' ,[HomeController::class,'deletemyappointment'])->name('deletemyappointment');



/*======================Back office===================================================*/



/*======================Doctor routes===================================================*/
 //add doctor view
Route::get('/add_doctor_view' ,[AdminController::class,'adddocview']);

//add doctor data
Route::post('/upload_doctor_data' ,[AdminController::class,'uploaddocdata']);

//displays doctorlist
Route::get('/doctorlist' ,[AdminController::class,'doctorlist']);


//update doctors data
Route::put('{id}/updatedocdata' ,[AdminController::class,'updatedocdata'])->name('updatedocdata');

//update doctors data-view
Route::get('{id}/updateDoctorView' ,[AdminController::class,'updateDoctorView'])->name('updateDoctorView');

//delete doctors data
Route::delete('{id}/deletedocdata' ,[AdminController::class,'deletedocdata'])->name('deletedocdata');




/*==========================Appointments routes=================================================*/

//displays appointmentlist
Route::get('/appointmentlist' ,[AdminController::class,'appointmentlist']);

//cancelAppointment
Route::put('{id}/cancelAppointment' ,[AdminController::class,'cancelAppointment'])->name('cancelAppointment');

//approveAppointment
Route::put('{id}/approveAppointment' ,[AdminController::class,'approveAppointment'])->name('approveAppointment');

// email view
Route::get('{id}/emailView' ,[AdminController::class,'emailView'])->name('emailView');

//send email 
Route::post('{id}/sendEmail' ,[AdminController::class,'sendEmail'])->name('sendEmail');



/*==========================Nurse list routes=================================================*/


//displays nurselist
Route::get('/nurse_list' ,[AdminController::class,'nurse_list']);


//add nurse view
Route::get('/add_nurse_View' ,[AdminController::class,'add_nurse_View']);

//add nurse data
Route::post('/upload_nurse_data' ,[AdminController::class,'upload_nurse_data']);



//update nurse data
Route::put('{id}/update_nurse_data' ,[AdminController::class,'update_nurse_data'])->name('update_nurse_data');

//update nurse data-view
Route::get('{id}/update_nurse_View' ,[AdminController::class,'update_nurse_View'])->name('update_nurse_View');


//delete nurse data
Route::delete('{id}/delete_Nurse_data' ,[AdminController::class,'delete_Nurse_data'])->name('delete_Nurse_data');




/*==========================Employee=================================================*/

//displays Employee list
Route::get('/employee_list' ,[AdminController::class,'employee_list']);




//add Employee view
Route::get('/add_employee_View' ,[AdminController::class,'add_employee_View']);

//add Employee data
Route::post('/upload_employee_data' ,[AdminController::class,'upload_employee_data']);





//update Employee data
Route::put('{id}/update_employee_data' ,[AdminController::class,'update_employee_data'])->name('update_employee_data');

//update Employee data-view
Route::get('{id}/update_employee_View' ,[AdminController::class,'update_employee_View'])->name('update_employee_View');




//delete Employee data
Route::delete('{id}/delete_employee_data' ,[AdminController::class,'delete_employee_data'])->name('delete_employee_data');





/*==========================departments=================================================*/














/*==========================medicinestore=================================================*/


/*==========================blocks=================================================*/


/*==========================beds=================================================*/





/*==========================bills=================================================*/









/*==========================REPORTS=================================================*/



/*==========================birthreport=================================================*/



/*==========================operationreport=================================================*/

