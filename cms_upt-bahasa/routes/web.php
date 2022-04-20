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

Route::prefix('admin')
    ->namespace('Admin')
    ->group(function(){
        Route::get('/dashboard', 'DashboardController@index')
            ->name('dashboard');
        Route::get('/teacher/teacher', 'TeacherController@index')
            ->name('teacher');
        Route::get('/teacher/add', 'TeacherController@add')
            ->name('teacher.add');
        Route::get('/teacher/edit', 'TeacherController@edit')
            ->name('teacher.edit');
        Route::get('member/internal/internal', 'InternalController@index')
            ->name('internal');
        Route::get('member/internal/add', 'InternalController@add')
            ->name('internal.add');
    });
