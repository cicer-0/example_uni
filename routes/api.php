<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UniversityController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FacultyCourseController;
use App\Http\Controllers\CourseController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rutas para University
Route::resource('universities', UniversityController::class)->except(['create', 'edit']);

// Rutas para Faculty
Route::resource('faculties', FacultyController::class)->except(['create', 'edit']);

// Rutas para Department
Route::resource('departments', DepartmentController::class)->except(['create', 'edit']);

// Rutas para FacultyCourse
Route::resource('faculty-courses', FacultyCourseController::class)->except(['create', 'edit']);

// Rutas para Course
Route::resource('courses', CourseController::class)->except(['create', 'edit']);
