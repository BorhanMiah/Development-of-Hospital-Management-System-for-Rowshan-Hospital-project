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

Route::get('/', function () {
    return view('welcome');
});
Route::view('/rowshanhospital','frontend.home')->name('rowshanhospital');
Route::get('login',[SessionsController::class,'cr'])->name('login.create');
Route::post('/login',[SessionsController::class,'store'])->name('login.store');
Route::get('/logout',[SessionsController::class,'destroy'])->name('logout');
Route::get('dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');







//Route::get('doctor',[DoctorController::class, 'doc'])->name('doctor');
//Route::get('admin',[AdminController::class, 'ad'])->name('admin');
//Route::get('reception',[ReceptionController::class, 're'])->name('reception');







Route::get('/index',[RegistrationContrller::class, 'index'])->name('user.index');
Route::post('/index/registration',[RegistrationContrller::class,'store'])->name('registration.store');
Route::get('/index/registration',[RegistrationContrller::class,'show'])->name('registration.create');
Route::get('/user/{id}/edit','RegistrationContrller@edit')->name('user.edit');
Route::post('/user/{id}/update','RegistrationContrller@update')->name('user.update');
Route::get('/user/{id}/delete','RegistrationContrller@destroy')->name('user.destroy');

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
Route::get('/ma/create',[DoctorController::class,'create'])->name('doctors.create');
Route::post('/ma/create',[DoctorController::class,'store'])->name('create.store');
Route::get('/doctors/view',[DoctorController::class,'ka'])->name('doctors.view');

Route::get('/baba',[ScheduleController::class,'ba'])->name('schedule.baba');
Route::get('/baba/create',[ScheduleController::class,'create'])->name('schedule.create');
Route::post('/baba/create',[ScheduleController::class,'store'])->name('schedule.store');
//Route::get('/scheduleinformation','ScheduleController@show')->name('schedule.show');
Route::get('/schedule/{id}/edit','ScheduleController@edit')->name('schedule.edit');
Route::get('/schedule/{id}/delete','ScheduleController@destroy')->name('schedule.destroy');
Route::post('/schedule/{id}/update','ScheduleController@update')->name('schedule.update');
//Route::get('/schedule/create','ScheduleController@create')->name('schedule.create');
//Route::post('/schedule/create','ScheduleController@store')->name('schedule.store');


Route::get('/in',[DiagnosticController::class,'dex'])->name('diagnostic.in');
Route::get('/in/create',[DiagnosticController::class,'create'])->name('diagnostic.create');
Route::post('/in/create',[DiagnosticController::class,'store'])->name('diagnostic.store');
Route::get('/diagnostic/{id}/edit','DiagnosticController@edit')->name('diagnostic.edit');
Route::get('/diagnostic/{id}/delete','DiagnosticController@destroy')->name('diagnostic.destroy');
Route::post('/diagnostic/{id}/update','DiagnosticController@update')->name('diagnostic.update');


Route::get('/add',[RoomController::class,'de'])->name('room.add');
Route::get('/add/create',[RoomController::class,'create'])->name('room.create');
Route::post('/add/create',[RoomController::class,'store'])->name('room.store');
Route::get('/room/{id}/edit','RoomController@edit')->name('room.edit');
Route::get('/room/{id}/delete','RoomController@destroy')->name('room.destroy');
Route::post('/room/{id}/update','RoomController@update')->name('room.update');


Route::get('/pas',[PresceptionController::class,'ki'])->name('presception.pas');
Route::get('/pas/create',[PresceptionController::class,'create'])->name('presception.create');
///Route::get('/cont',[ContactController::class,'tact'])->name('contact.cont');
//Route::get('/cont/create',[ContactController::class,'create'])->name('contact.create');
Route::get('/cont','ContactController@cont')->name('contact.cont');
Route::get('/create','ContactController@create')->name('contact.create');
