<?php

use App\Http\Controllers\clasec as ControllersClasec;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\StudentController;
use App\Models\clasec;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student/index', [StudentController::class,'index'])->name('student.index');
Route::get('/student/fullpage//{id}', [StudentController::class,'show'])->name('Student.show');
Route::get('/student/create', [StudentController::class,'create'])->name('Student.store');
Route::post('/student/store' , [StudentController::class,'store'])->name('student.name');

///////////Section


Route::get('/Section/index', [SectionController::class,'index'])->name('Section.index');
Route::get('/Section/fullpage/{id}', [SectionController::class,'show'])->name('Section.show');
Route::get('/Section/create', [SectionController::class,'create'])->name('Section.store');
Route::post('/Section/store' , [SectionController::class,'store'])->name('Section.create');

///////////Class
Route::get('/homepage', function () {
    return view('layouts.homecomponent');
})->middleware('auth')->name('home');

Route::get('/clas/index', [ControllersClasec::class,'index'])->name('clas.index');
Route::get('/clas/fullpage/{id}', [ControllersClasec::class,'show'])->name('class.show');
Route::get('/clas/create', [ControllersClasec::class,'create'])->name('class.Store');
Route::post('/clas/store' , [ControllersClasec::class,'store'])->name('class.create');


















Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/home',function ()
{
return view('home');
})->middleware(['auth','admin']);
require __DIR__.'/auth.php';
