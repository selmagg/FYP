<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Covid_Vac_InfoController;
use App\Http\Controllers\MedicationController;
use App\Http\Controllers\MedicationRequestController;
use App\Http\Controllers\AppointmentReqController;
use App\Http\Controllers\HealthRecordController;

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

Route::get('list', 'App\Http\Controllers\PatientController@list');
Route::get('show/{id}', 'App\Http\Controllers\PatientController@show');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('display','App\Http\Controllers\PatientController@display')
->name('display_patient');

Route::resource('patients',PatientController::class);
Route::resource('apps',AppointmentReqController::class);
Route::resource('users',UserController::class);

Route::resource('covidvacinfo',Covid_Vac_InfoController::class);
Route::get('/vac_info', [App\Http\Controllers\Covid_Vac_InfoController::class, 'index'])->name('vac_info');

Route::resource('meds',MedicationController::class);
Route::get('/meds', [App\Http\Controllers\MedicationController::class, 'index'])->name('meds');

Route::resource('health_info',HealthRecordController::class);
Route::get('/health_info', [App\Http\Controllers\HealthRecordController::class, 'index'])->name('health_info');

Route::resource('med_req',MedicationRequestController::class);

Route::group(['middleware' => ['auth']], function() {

Route::get('/store/{status}', 'App\Http\Controllers\MedicationRequestController@store');

Route::get('/req_history', [App\Http\Controllers\MedicationRequestController::class, 'index'])->name('req_history');

Route::get('/confirmed_apps', [App\Http\Controllers\AppointmentReqController::class, 'index'])->name('confirmed_apps');

Route::get('/edit_nhs', [App\Http\Controllers\PatientController::class, 'update_nhs'])->name('edit_nhs');
});



