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

        Route::get('/visimisi', 'VisiMisiController@index')
            ->name('visimisi');

        Route::get('/teachingstaff', 'TeachingStaffController@index')
            ->name('teachingstaff');
        
        Route::get('/ept', 'EptController@index')
            ->name('ept');
            
        Route::get('placement-test', 'PlacementtestController@index')
            ->name('placement-test');
        
        Route::get('new-account', 'NewAccountController@index')
            ->name('new-account');
            
        Route::get('test_skema', 'TestSkemaController@index')
            ->name('test_skema');

        Route::get('test-result', 'TestResultController@index')
            ->name('test-result');

        Route::get('certificate', 'CertificateController@index')
            ->name('certificate');

        Route::get('contact', 'ContactController@index')
            ->name('contact');
    });



Route::prefix('admin')
    ->namespace('Admin')
    ->group(function(){
        Route::get('/dashboard', 'DashboardController@index')
            ->name('dashboard');

        //Teacher
        Route::get('/teacher', 'TeacherController@index')
            ->name('teacher');
        Route::get('/teacher/add', 'TeacherController@add')
            ->name('teacher.add');
        Route::get('/teacher/edit/{id_teaching_staff}', 'TeacherController@edit')
            ->name('teacher.edit');
        Route::post('/teacher/save', 'TeacherController@store')
            ->name('teacher.store');
        Route::post('/teacher/update/{id_teaching_staff}', 'TeacherController@update')
            ->name('teacher.update');
        Route::get('/teacher/delete/{id_teaching_staff}', 'TeacherController@destroy')
            ->name('teacher.delete');

        //Member Internal
        Route::get('member/internal', 'InternalController@index')
            ->name('member.internal');
        Route::get('member/internal/add', 'InternalController@add')
            ->name('internal.add');
        Route::get('member/internal/edit', 'InternalController@edit')
            ->name('internal.edit');

        //External
        Route::get('member/external', 'ExternalController@index')
            ->name('member.external');
        Route::get('member/external/add', 'ExternalController@add')
            ->name('external.add');
        Route::get('member/external/edit', 'ExternalController@edit')
            ->name('external.edit');
        
        //News
        Route::get('/news', 'NewsController@index')
            ->name('news');
        Route::get('/news/add', 'NewsController@add')
            ->name('news.add');
        Route::get('/news/edit/{id_news}', 'NewsController@edit')
            ->name('news.edit');
        Route::post('/news/save', 'NewsController@store')
            ->name('news.store');
        Route::post('/news/update/{id_news}', 'NewsController@update')
            ->name('news.update');
        Route::get('/news/delete/{id_news}', 'NewsController@destroy')
            ->name('news.delete');

        //Service
        Route::get('/service', 'ServiceController@index')
            ->name('service');
        Route::get('/service/add', 'ServiceController@add')
            ->name('service.add');
        Route::get('/service/edit', 'ServiceController@edit')
            ->name('service.edit');

        // Schedule
        Route::get('/schedule', 'ScheduleController@index')
         ->name('schedule');
        Route::get('/schedule/add', 'ScheduleController@add')
         ->name('schedule.add');
        Route::get('/schedule/edit', 'ScheduleController@edit')
         ->name('schedule.edit');

        //Feedback
        Route::get('/feedback', 'FeedbackController@index')
         ->name('feedback');

        //Procedure
        Route::get('/procedure', 'ProcedureController@index')
         ->name('procedure');
        Route::get('/procedure/add', 'ProcedureController@add')
         ->name('procedure.add');
        Route::get('/procedure/edit', 'ProcedureController@edit')
         ->name('procedure.edit');

        //Training
        Route::get('/training', 'TrainingController@index')
         ->name('training');
        Route::get('/training/add', 'TrainingController@add')
         ->name('training.add');
        Route::get('/training/edit', 'TrainingController@edit')
         ->name('training.edit');

    });
