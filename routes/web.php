<?php

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




//Student
Route::get('/student-profil','MainStudentController@studentProfil');
Route::get('/prijava-ispita','MainStudentController@prijavaIspita');
Route::put('/ispit-save','MainStudentController@studentPrijava');



//Profesor
Route::get('/profesor-prikaz','MainProfesorController@profesorPrikaz');


//Kolokvijum
Route::get('/kolokvijum-prikaz','KolokvijumController@kolokvijumPrikaz');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/useradd','MainAdminController@addpage');
Route::post('/usersave','MainAdminController@save');

Route::prefix('student')->group(function() {
    Route::get('/', 'MainStudentController@index')->name('student.home');
    Route::get('/login', 'AuthStudent\LoginController@showLoginForm')->name('student.login');
    Route::post('/login', 'AuthStudent\LoginController@login')->name('student.login.submit');
});

Route::prefix('admin')->group(function() {
    Route::get('/', 'MainAdminController@index')->name('admin.home');
    Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
});

Route::prefix('profesor')->group(function() {
    Route::get('/', 'MainProfesorController@index')->name('profesor.home');
    Route::get('/login', 'AuthProfesor\LoginController@showLoginForm')->name('profesor.login');
    Route::post('/login', 'AuthProfesor\LoginController@login')->name('profesor.login.submit');
});

Route::prefix('studentska_sluzba')->group(function() {
    Route::get('/', 'MainStudentskaSluzbaController@index')->name('studentska_sluzba.home');
    Route::get('/login', 'authStudentskaSluzba\LoginController@showLoginForm')->name('studentska_sluzba.login');
    Route::post('/login', 'authStudentskaSluzba\LoginController@login')->name('studentska_sluzba.login.submit');
});
