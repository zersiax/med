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

Route::get('/', function () {
    $courses  = \App\Course::all();

    return view('index')->withCourses($courses);
});

Route::get('/submit', function () {
    $organizations = App\Organization::all();
    return view('submit')->withOrganizations($organizations);
});
