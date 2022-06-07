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
        
        Route::get('course', 'CourseController@index')
            ->name('course');
    });


Route::prefix('admin')
    ->namespace('Admin')
    // ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/dashboard', 'DashboardController@index')
            ->name('dashboard');
        Route::get('/', 'DashboardController@index')
            ->name('admin');
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
<<<<<<< Updated upstream
        Route::get('/member/internal', 'InternalController@index')
            ->name('internal');
        Route::get('/member/internal/add', 'InternalController@add')
            ->name('internal.add');
        Route::get('/member/internal/edit/{id_member}', 'InternalController@edit')
            ->name('internal.edit');
        Route::post('/member/internal/save', 'InternalController@store')
            ->name('internal.store');
        Route::post('/member/internal/update/{id_member}', 'InternalController@update')
            ->name('internal.update');
        Route::get('/member/internal/delete/{id_member}', 'InternalController@destroy')
            ->name('internal.delete');
=======
        Route::get('member', 'InternalController@index')
            ->name('member');
        Route::get('member/add', 'InternalController@add')
            ->name('internal.add');
        Route::get('member/edit', 'InternalController@edit')
            ->name('internal.edit');

        //External
        // Route::get('member/external', 'ExternalController@index')
        //     ->name('member.external');
        // Route::get('member/external/add', 'ExternalController@add')
        //     ->name('external.add');
        // Route::get('member/external/edit', 'ExternalController@edit')
        //     ->name('external.edit');
>>>>>>> Stashed changes
        
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
        Route::get('/service/edit/{id_service}', 'ServiceController@edit')
            ->name('service.edit');
        Route::post('/service/save', 'ServiceController@store')
            ->name('service.store');
        Route::post('/service/update/{id_service}', 'ServiceController@update')
            ->name('service.update');
        Route::get('/service/delete/{id_service}', 'ServiceController@destroy')
            ->name('service.delete');

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
        Route::get('/feedback/delete/{id_feedback}', 'FeedbackController@destroy')
         ->name('feedback.delete');

        //Procedure
        Route::get('/procedure', 'ProcedureController@index')
         ->name('procedure');
        Route::get('/procedure/add', 'ProcedureController@add')
         ->name('procedure.add');
        Route::get('/procedure/edit/{id_procedure}', 'ProcedureController@edit')
         ->name('procedure.edit');
        Route::post('/procedure/save', 'ProcedureController@store')
         ->name('procedure.store');
        Route::post('/procedure/update/{id_procedure}', 'ProcedureController@update')
         ->name('procedure.update');
        Route::get('/procedure/delete/{id_procedure}', 'ProcedureController@destroy')
         ->name('procedure.delete');

        //Training
        Route::get('/training', 'TrainingController@index')
         ->name('training');
        Route::get('/training/add', 'TrainingController@add')
         ->name('training.add');
        Route::get('/training/edit/{id_training}', 'TrainingController@edit')
         ->name('training.edit');
        Route::post('/training/store', 'TrainingController@store')
         ->name('training.store');
        Route::post('/training/update/{id_training}', 'TrainingController@update')
         ->name('training.update');
        Route::get('/training/destroy/{id_training}', 'TrainingController@destroy')
         ->name('training.delete');
    });

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/')
    ->namespace('User')
    ->group(function(){
        Route::get('/dashboard', 'DashboardController@index')
            ->name('dashboard');
        Route::get('/history', 'HistoryController@index')
            ->name('history');
    });
