<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\RegistrationContrller;
use App\Http\Controllers\Backend\AppointmentController;
use App\Http\Controllers\Backend\DoctorController;
use App\Http\Controllers\Backend\ScheduleController;
use App\Http\Controllers\Backend\DiagnosticController;
use App\Http\Controllers\Backend\RoomController;
use App\Http\Controllers\Backend\PresceptionController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ReceptionController;
use App\Http\Controllers\Backend\SessionsController;
use App\Http\Controllers\Backend\PaymentController;
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

// Route::group(['middleware'=>'auth'],function(){

    Route::get('/', function () {
        return view('welcome');
    });
    Route::view('/rowshanhospital','frontend.home')->name('rowshanhospital');
    Route::get('/login',[SessionsController::class,'cr'])->name('login.create');
    Route::get('dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');
    Route::post('/login',[SessionsController::class,'store'])->name('login.store');
    Route::get('/logout',[SessionsController::class,'destroy'])->name('logout');











//Route::get('doctor',[DoctorController::class, 'doc'])->name('doctor');
//Route::get('admin',[AdminController::class, 'ad'])->name('admin');
//Route::get('reception',[ReceptionController::class, 're'])->name('reception');







Route::get('/index',[RegistrationContrller::class, 'index'])->name('user.index');
Route::post('/index/registration',[RegistrationContrller::class,'store'])->name('registration.store');
Route::get('/index/registration',[RegistrationContrller::class,'show'])->name('registration.create');
Route::get('/index/{id}',[RegistrationContrller::class,'delete'])->name('user.userdelete');
Route::get('/index/edit/{id}',[RegistrationContrller::class,'edit'])->name('user.edit');
Route::put('/index/update/{id}',[RegistrationContrller::class,'update'])->name('user.update');
//Route::get('/user/{id}/edit','RegistrationContrller@edit')->name('user.edit');
//Route::post('/user/{id}/update','RegistrationContrller@update')->name('user.update');
//Route::get('/user/{id}/delete','RegistrationContrller@destroy')->name('user.destroy');


//Route::resource('appointment', 'AppointmentController');
Route::get('/appointment',[AppointmentController::class,'appointment'])->name('appointment.appointment');
Route::post('/appointment',[AppointmentController::class,'store'])->name('appointment.store');
Route::get('/appointment/appointmentList',[AppointmentController::class,'list'])->name('appointment.appointmentList');
Route::get('/appointment/appointmentList/{id}',[AppointmentController::class,'delete'])->name('appointment.appointmentdelete');
Route::get('/appointment/patientInformation',[AppointmentController::class,'request'])->name('appointment.patientInformation');
Route::get('/appointment/appointmentList/edit/{id}',[AppointmentController::class,'edit'])->name('appointment.edit');
Route::put('/appointment/appointmentList/update/{id}',[AppointmentController::class,'update'])->name('appointment.update');


Route::resource('doctors', 'DoctorController');
Route::get('/ma',[DoctorController::class,'ta'])->name('doctors.ma');
Route::get('/ma/delete/{id}',[DoctorController::class,'delete'])->name('doctors.doctordelete');
Route::get('/ma/edit/{id}',[DoctorController::class,'edit'])->name('doctors.edit');
Route::put('/ma/update/{id}',[DoctorController::class,'update'])->name('doctors.update');
Route::get('/ma/show/{id}',[DoctorController::class,'show'])->name('doctors.show');
Route::get('/ma/create',[DoctorController::class,'create'])->name('doctors.create');
Route::post('/ma/create',[DoctorController::class,'store'])->name('doctors.store');
Route::get('/view',[DoctorController::class,'ka'])->name('doctors.view');
Route::get('/doctorlist',[DoctorController::class,'list'])->name('doctors.doctorlist');
//Route::get('/doctorinformationlist','DoctorController@doctorlist')->name('doctorinformationlist');


Route::get('/baba',[ScheduleController::class,'ba'])->name('schedule.baba');
Route::get('/baba/create',[ScheduleController::class,'create'])->name('schedule.create');
Route::post('/baba/create',[ScheduleController::class,'store'])->name('schedule.store');
Route::get('/baba/delete/{id}',[ScheduleController::class,'delete'])->name('schedule.scheduledelete');
Route::get('/baba/edit/{id}',[ScheduleController::class,'edit'])->name('schedule.edit');
Route::put('/baba/update/{id}',[ScheduleController::class,'update'])->name('schedule.update');
//Route::get('/scheduleinformation','ScheduleController@show')->name('schedule.show');
//Route::get('/schedule/{id}/edit','ScheduleController@edit')->name('schedule.edit');
//Route::get('/schedule/{id}/delete','ScheduleController@destroy')->name('schedule.destroy');
//Route::post('/schedule/{id}/update','ScheduleController@update')->name('schedule.update');
//Route::get('/schedule/create','ScheduleController@create')->name('schedule.create');
//Route::post('/schedule/create','ScheduleController@store')->name('schedule.store');


Route::get('/in',[DiagnosticController::class,'dex'])->name('diagnostic.in');
Route::get('/in/create',[DiagnosticController::class,'create'])->name('diagnostic.create');
Route::post('/in/create',[DiagnosticController::class,'store'])->name('diagnostic.store');
Route::get('/in/delete/{id}',[DiagnosticController::class,'delete'])->name('diagnostic.diagnosticdelete');
Route::get('/in/edit/{id}',[DiagnosticController::class,'edit'])->name('diagnostic.edit');
Route::put('/in/update/{id}',[DiagnosticController::class,'update'])->name('diagnostic.update');
//Route::get('/diagnostic/{id}/edit','DiagnosticController@edit')->name('diagnostic.edit');
//Route::get('/diagnostic/{id}/delete','DiagnosticController@destroy')->name('diagnostic.destroy');
//Route::post('/diagnostic/{id}/update','DiagnosticController@update')->name('diagnostic.update');


Route::get('/add',[RoomController::class,'de'])->name('room.add');
Route::get('/add/create',[RoomController::class,'create'])->name('room.create');
Route::post('/add/create',[RoomController::class,'store'])->name('room.store');
Route::get('/add/delete/{id}',[RoomController::class,'delete'])->name('room.roomdelete');
Route::get('/add/edit/{id}',[RoomController::class,'edit'])->name('room.edit');
Route::put('/add/update/{id}',[RoomController::class,'update'])->name('room.update');
//Route::get('/room/{id}/edit','RoomController@edit')->name('room.edit');
//Route::get('/room/{id}/delete','RoomController@destroy')->name('room.destroy');
//Route::post('/room/{id}/update','RoomController@update')->name('room.update');


Route::get('/pas',[PresceptionController::class,'ki'])->name('presception.pas');
Route::get('/pas/create',[PresceptionController::class,'create'])->name('presception.create');
Route::post('/pas/create',[PresceptionController::class,'store'])->name('presception.store');
Route::get('/pas/delete/{id}',[PresceptionController::class,'delete'])->name('presception.presceptiondelete');
Route::get('/pas/edit/{id}',[PresceptionController::class,'edit'])->name('presception.edit');
Route::put('/pas/update/{id}',[PresceptionController::class,'update'])->name('presception.update');
Route::get('/pas/show/{id}',[PresceptionController::class,'show'])->name('presception.show');
Route::get('/pas/print-pdf/{id}',[PresceptionController::class,'printPDF'])->name('presception.pdf');
//Route::get('/presception/{id}/print-pdf','PresceptionController@printPDF')->name('presception.pdf');
//Route::get('/presception/{id}/show','PresceptionController@show')->name('presception.show');
//Route::get('/presception/{id}/edit','PresceptionController@edit')->name('presception.edit');
//Route::post('/presception/{id}/update','PresceptionController@update')->name('presception.update');
//Route::get('/presception/{id}/delete','PresceptionController@destroy')->name('presception.destroy');
//Route::get('/presception/{id}/print-pdf','PresceptionController@printPDF')->name('presception.pdf');


///Route::get('/cont',[ContactController::class,'tact'])->name('contact.cont');
//Route::get('/cont/create',[ContactController::class,'create'])->name('contact.create');
Route::get('/cont',[ContactController::class,'cont'])->name('contact.cont');
Route::get('/cont/create',[ContactController::class,'create'])->name('contact.create');
Route::post('/cont/create',[ContactController::class,'store'])->name('contact.store');
//Route::get('/cont','ContactController@cont')->name('contact.cont');
//Route::get('/create','ContactController@create')->name('contact.create');


Route::get('/pay',[PaymentController::class,'pay'])->name('payment.pay');
Route::get('/pay/create',[PaymentController::class,'create'])->name('payment.create');
Route::post('/pay/create',[PaymentController::class,'store'])->name('payment.store');
Route::get('/pay/delete/{id}',[PaymentController::class,'delete'])->name('payment.paymentdelete');
Route::get('/pay/edit/{id}',[PaymentController::class,'edit'])->name('payment.edit');
Route::put('/pay/update/{id}',[PaymentController::class,'update'])->name('payment.update');
Route::get('/pay/show/{id}',[PaymentController::class,'show'])->name('payment.show');
Route::get('/pay/print-pdf/{id}',[PaymentController::class,'printPDF'])->name('payment.pdf');

//Route::get('/payment','PaymentController@index')->name('payment.index');
//Route::get('/payment/create','PaymentController@create')->name('payment.create');
//Route::post('/payment/create','PaymentController@store')->name('payment.store');
//Route::get('/payment/{id}/edit','PaymentController@edit')->name('payment.edit');
//Route::get('/payment/{id}/delete','PaymentController@destroy')->name('payment.destroy');
//Route::post('/payment/{id}/update','PaymentController@update')->name('payment.update');
//Route::get('/payment/{id}/show','PaymentController@show')->name('payment.show');
//Route::get('/payment/print','PaymentController@print')->name('print.show');
