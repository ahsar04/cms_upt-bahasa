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

Route::prefix('/')
    ->namespace('LandingPage')
    ->group(function(){
        Route::get('/', 'HomeController@index')
            ->name('home');
    });



Route::prefix('admin')
    ->namespace('Admin')
    ->group(function(){
        Route::get('/dashboard', 'DashboardController@index')
            ->name('dashboard');

        //Teacher
        Route::get('/teacher/teacher', 'TeacherController@index')
            ->name('teacher');
        Route::get('/teacher/add', 'TeacherController@add')
            ->name('teacher.add');
        Route::get('/teacher/edit', 'TeacherController@edit')
            ->name('teacher.edit');

        //Member Internal
        Route::get('member/internal/internal', 'InternalController@index')
            ->name('internal');
        Route::get('member/internal/add', 'InternalController@add')
            ->name('internal.add');
        Route::get('member/internal/edit', 'InternalController@edit')
            ->name('internal.edit');

        //External
        Route::get('member/external/external', 'ExternalController@index')
            ->name('external');
        Route::get('member/external/add', 'ExternalController@add')
            ->name('external.add');
        Route::get('member/external/edit', 'ExternalController@edit')
            ->name('external.edit');
        
        //News
        Route::get('/news/news', 'NewsController@index')
            ->name('news');
        Route::get('/news/add', 'NewsController@add')
            ->name('news.add');
        Route::get('/news/edit', 'NewsController@edit')
            ->name('news.edit');

        //Service
        Route::get('/service/service', 'ServiceController@index')
            ->name('service');
        Route::get('/service/add', 'ServiceController@add')
            ->name('service.add');
        Route::get('/service/edit', 'ServiceController@edit')
            ->name('service.edit');

        // Schedule
        Route::get('/schedule/schedule', 'ScheduleController@index')
         ->name('schedule');
        Route::get('/schedule/add', 'ScheduleController@add')
         ->name('schedule.add');
        Route::get('/schedule/edit', 'ScheduleController@edit')
         ->name('schedule.edit');

        //Feedback
        Route::get('/feedback/feedback', 'FeedbackController@index')
         ->name('feedback');

        //Procedure
        

        //Pelatihan

    });
