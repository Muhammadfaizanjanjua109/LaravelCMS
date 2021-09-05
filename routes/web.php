<?php

use App\Http\Controllers\clasec as ControllersClasec;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\subjectController;
use App\Http\Controllers\teacherController;
use App\Models\clasec;
use App\Models\subject;
use Illuminate\Routing\RouteGroup;
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






///subjects
Route::prefix('subject')->name('subject.')->group(function () {
    Route::get('/index', [subjectController::class,'index'])->name('index');
    Route::get('/fullpage/{id}', [subjectController::class,'show'])->name('show');
    Route::get('/create', [subjectController::class,'create'])->name('Store');
    Route::post('/store' , [subjectController::class,'store'])->name('create');

});

///Teacher
Route::prefix('teacher')->name('teacher.')->group(function () {
    Route::get('/index', [teacherController::class,'index'])->name('index');
    Route::get('/fullpage/{id}', [teacherController::class,'show'])->name('show');
    Route::get('/create', [teacherController::class,'create'])->name('Store');
    Route::post('/store' , [teacherController::class,'store'])->name('create');

});















Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/home',function ()
{
return view('home');
})->middleware(['auth','admin']);
require __DIR__.'/auth.php';
