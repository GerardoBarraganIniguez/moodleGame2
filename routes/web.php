<?php

use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\ClassroomsLessonController;
use App\Http\Controllers\ClassroomStudentController;
use App\Http\Controllers\ClassroomsViewController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ShowClassroomsController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;
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
    return view('auth.login');
});

//roles
Route::get('/roles',[RoleController::class, 'index'])->name('roles.index');
Route::get('/roles/create',[RoleController::class, 'create'])->name('roles.create');
Route::post('/roles',[RoleController::class, 'store'])->name('roles.store');

//users
Route::get('/users',[UserController::class, 'index'])->name('users.index');
Route::get('/users/create',[UserController::class, 'create'])->name('users.create');
Route::post('/users',[UserController::class, 'store'])->name('users.store');
Route::get('/users/{user}/edit',[UserController::class, 'edit'])->name('users.edit');
Route::patch('/users/{user}',[UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}',[UserController::class, 'destroy'])->name('users.destroy');

//Login y logout
Route::get('/login/create',[LoginController::class, 'index'])->name('login.index');
Route::post('/login',[LoginController::class, 'store'])->name('login.store');
Route::post('/logout',[LoginController::class, 'logout'])->name('login.logout');

//subjects
Route::get('/subjects',[SubjectController::class, 'index'])->name('subjects.index');
Route::get('/subjects/create',[SubjectController::class, 'create'])->name('subjects.create');
Route::post('/subjects',[SubjectController::class, 'store'])->name('subjects.store');
Route::get('/subjects/{subject}/edit',[SubjectController::class, 'edit'])->name('subjects.edit');
Route::patch('/subjects/{subject}',[SubjectController::class, 'update'])->name('subjects.update');
Route::delete('/subjects/{subject}',[SubjectController::class, 'destroy'])->name('subjects.destroy');

//sections
Route::get('/sections',[SectionController::class, 'index'])->name('sections.index');
Route::get('/sections/create',[SectionController::class, 'create'])->name('sections.create');
Route::post('/sections',[SectionController::class, 'store'])->name('sections.store');
Route::get('/sections/{section}/edit',[SectionController::class, 'edit'])->name('sections.edit');
Route::patch('/sections/{section}',[SectionController::class, 'update'])->name('sections.update');
Route::delete('/sections/{section}',[SectionController::class, 'destroy'])->name('sections.destroy');

//classrooms
Route::get('/classrooms',[ClassroomController::class, 'index'])->name('classrooms.index');
Route::get('/classrooms/create',[ClassroomController::class, 'create'])->name('classrooms.create');
Route::post('/classrooms',[ClassroomController::class, 'store'])->name('classrooms.store');
Route::get('/classrooms/{classroom}/edit',[ClassroomController::class, 'edit'])->name('classrooms.edit');
Route::patch('/classrooms/{classroom}',[ClassroomController::class, 'update'])->name('classrooms.update');
Route::delete('/classrooms/{classroom}/{user}',[ClassroomController::class, 'destroy'])->name('classrooms.destroy');

//assignments
Route::get('/assignments',[AssignmentController::class, 'index'])->name('assignments.index');
Route::get('/assignments/{classroom}/create',[AssignmentController::class, 'create'])->name('assignments.create');
Route::post('/assignments/{classroom}',[AssignmentController::class, 'store'])->name('assignments.store');
Route::get('/assignments/{assignment}/edit',[AssignmentController::class, 'edit'])->name('assignments.edit');
Route::patch('/assignments/{assignment}',[AssignmentController::class, 'update'])->name('assignments.update');
Route::delete('/assignments/{assignment}',[AssignmentController::class, 'destroy'])->name('assignments.destroy');

//exams
Route::get('/exams',[ExamController::class, 'index'])->name('exams.index');
Route::get('/exams/{classroom}/create',[ExamController::class, 'create'])->name('exams.create');
Route::post('/exams/{classroom}',[ExamController::class, 'store'])->name('exams.store');
Route::get('/exams/{exam}/edit',[ExamController::class, 'edit'])->name('exams.edit');
Route::patch('/exams/{exam}',[ExamController::class, 'update'])->name('exams.update');
Route::delete('/exams/{exam}',[ExamController::class, 'destroy'])->name('exams.destroy');

//Student-Classroom
Route::get('/classrooms_students',[ClassroomStudentController::class, 'index'])->name('classrooms_students.index');
Route::get('/classrooms_students/{user}/create',[ClassroomStudentController::class, 'create'])->name('classrooms_students.create');
Route::post('/classrooms_students/{user}',[ClassroomStudentController::class, 'store'])->name('classrooms_students.store');

//ShowClassrooms (students and teachers)
Route::get('/showClassrooms',[ShowClassroomsController::class, 'index'])->name('showClassrooms.index');

//Classroom View
Route::get('/classroomsView/{classroom}',[ClassroomsViewController::class, 'index'])->name('ClassroomsView.index');

//Classroom Lesson teacher
Route::get('/classroomsLesson/{classroom}',[ClassroomsLessonController::class, 'index'])->name('classroomsLesson.index');

