<?php

use Illuminate\Support\Facades\Route;
use App\Models\Students;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardKelasController;
use App\Http\Controllers\DashboardStudentController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\LoginController;


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

Route::get('/', [StudentsController::class, 'home']);

Route::get('/hello', function () {
    return ('Hello World!');
});

Route::get('/home', function () {
    return view('home', [
        "tittle" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "about",
        "nama" => "Amelia Salsabila Rahayu",
        "kelas" => "11 PPLG 1",
        "foto" => "img/salsa.jpg",
    ]);
});

Route::group(["prefix" => "/student"], function () {
    Route::get('/all', [StudentsController::class, 'index']); //view
    Route::get('/detail/{student}', [StudentsController::class, 'show']); //detail
    Route::get('/create', [StudentsController::class, 'create']); //create data
    Route::post('/add', [StudentsController::class, 'store']); // add new data
    Route::delete('/delete/{student}', [StudentsController::class, 'destroy']);
    Route::get('/edit/{student}', [StudentsController::class, 'edit']);
    Route::post('/update/{student}', [StudentsController::class, 'update']);
});

Route::group(["prefix" => "/kelas"], function () {
    Route::get('/all', [KelasController::class, 'index']); //view
    Route::get('/create', [KelasController::class, 'create']); //create data
    Route::post('/add', [KelasController::class, 'store']); // add new data
    Route::delete('/delete/{kelas}', [KelasController::class, 'destroy']);
    Route::get('/edit/{kelas}', [KelasController::class, 'edit']);
    Route::post('/update/{kelas}', [KelasController::class, 'update']);
});

Route::get('/extracurricular', [ExtracurricularController::class, 'index']);

Route::get('/Login/signin', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::get('/Signup/signup', [RegisterController::class, 'index'])->middleware('guest');
Route::get('/login/logout', [LoginController::class, 'logout'])->middleware('auth');
Route::post('/Login/auth', [LoginController::class, 'auth']);
Route::post('/Signup/store', [RegisterController::class, 'store']);

Route::get('/Dashboard/index', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/Dashboard/student/all', [DashboardStudentController::class, 'index'])->middleware('auth');
Route::get('/Dashboard/student/detail/{student}', [DashboardStudentController::class, 'show']);
Route::get('/Dashboard/student/create', [DashboardStudentController::class, 'create']);
Route::post('/Dashboard/student/add', [DashboardStudentController::class, 'store']);
Route::delete('/Dashboard/student/delete/{students}', [DashboardStudentController::class, 'destroy']);
Route::get('/Dashboard/student/edit/{students}', [DashboardStudentController::class, 'edit']);
Route::post('/Dashboard/student/update/{students}', [DashboardStudentController::class, 'update']);

Route::get('/Dashboard/kelas/all', [DashboardKelasController::class, 'index']);
Route::get('/Dashboard/kelas/edit/{kelas}', [DashboardKelasController::class, 'edit']);
