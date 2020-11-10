<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','HomeController@index')->name('home');
Route::get('/search/','HomeController@search')->name('search');
Route::get('/subscribe','HomeController@subscribe');
Route::get('doctors','HomeController@doctors')->name('doctors');
Route::get('clinics','HomeController@clinics')->name('clinics');
// User Controllers

Route::get('dashboard','UserController@dashboard')->name('dashboard');
Route::get('profile','UserController@profile')->name('profile');
Route::patch('profile/update','UserController@profileupdate')->name('profile.update');
// Doctors Controller
// Route::get('/doctor_dashboard','DoctorController@dashboard')->name('doctors');

// Patient Controller
// Route::get('/patient_dashboard','PatientController@dashboard');

// Clinic Controller
// Route::get('clinics','ClinicController@index')->name('clinics');
Auth::routes();

