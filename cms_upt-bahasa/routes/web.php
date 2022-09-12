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
            ->name('landingpage');

        Route::get('visimisi', 'VisiMisiController@index')
            ->name('visimisi');

        Route::get('teachingstaff', 'TeachingStaffController@index')
            ->name('teachingstaff');
        
        Route::get('service/{service}', 'ServiceController@index')
            ->name('service.data');
        
        Route::get('procedure/{procedure_menu}', 'ProcedureController@index')
            ->name('procedure.data');
            
        // Route::get('placement-test', 'ServiceController@placementTest')
        //     ->name('placement-test');
        
        // Route::get('course', 'ServiceController@course')
        //     ->name('course');

        Route::get('new-account', 'ProcedureController@makeAccount')
            ->name('new-account');
            
        Route::get('test_skema', 'ProcedureController@testSkeme')
            ->name('test_skema');

        Route::get('test-result', 'ProcedureController@seeResult')
            ->name('test-result');

        Route::get('certificate', 'ProcedureController@takeCertificate')
            ->name('certificate');

        Route::get('contact', 'ContactController@index')
            ->name('contact');
        Route::post('/contact/save', 'ContactController@store')
            ->name('contact.store');
        

        Route::get('newsdetail/{id_news}', 'NewsDetailController@index')
            ->name('newsdetail');
    });


Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/dashboard', 'DashboardController@index')
            ->name('dashboard');
        Route::get('/dashboard', 'DashboardController@index')
            ->name('admin');
        //Teacher
        Route::get('/teacher', 'TeacherController@index')
            ->name('teacher');
        Route::get('/teacher/add', 'TeacherController@add')
            ->name('teacher.add');
        Route::get('/teacher/edit/{id_teaching_staff}', 'TeacherController@edit')
            ->name('teacher.edit');
        Route::get('/teacher/detail/{id_teaching_staff}', 'TeacherController@detail')
            ->name('teacher.detail');
        Route::post('/teacher/save', 'TeacherController@store')
            ->name('teacher.store');
        Route::post('/teacher/update/{id_teaching_staff}', 'TeacherController@update')
            ->name('teacher.update');
        Route::get('/teacher/delete/{id_teaching_staff}', 'TeacherController@destroy')
            ->name('teacher.delete');

        //Member
        Route::get('/member', 'MemberController@index')
            ->name('member');
        Route::get('/member/detail/{id}', 'MemberController@detail')
            ->name('member.detail');
        Route::get('/member/delete/{id}', 'MemberController@destroy')
            ->name('member.delete');

        //Admin
        Route::get('/administrator', 'AdminController@index')
            ->name('administrator');
        Route::get('/administrator/detail/{id}', 'AdminController@detail')
            ->name('administrator.detail');
        Route::get('/administrator/delete/{id}', 'AdminController@destroy')
            ->name('administrator.delete');
        
        //Profile Admin
        Route::get('/profileadmin', 'UserController@index')
            ->name('profileadmin');
        Route::post('/profileadmin/update/{id}', 'AdminController@update')
            ->name('profileadmin.update');

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

        // Register Training
        Route::get('/registraining', 'RegisTrainingController@index')
            ->name('registraining');
        Route::get('/registraining/edit/{id_training_registration}', 'RegisTrainingController@edit')
            ->name('registraining.edit');
        Route::get('/registraining/detail/{id_training_registration}', 'RegisTrainingController@detail')
            ->name('registraining.detail');
        Route::post('/registraining/update/{id_training_registration}', 'RegisTrainingController@update')
            ->name('registraining.update');
        Route::get('/registraining/delete/{id_training_registration}', 'RegisTrainingController@destroy')
            ->name('registraining.delete');

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
Route::get('/home', 'user\DashboardController@index')->name('home');

Route::prefix('/')
    ->namespace('User')
    ->middleware(['auth','user'])
    ->group(function(){
        Route::get('/dashboard', 'DashboardController@index')
            ->name('dashboard');
        Route::get('/history', 'HistoryController@index')
            ->name('history');
        Route::get('/profile', 'UserController@edit')
            ->name('profile.edit');
        Route::post('/profile/update/{id}', 'UserController@update')
            ->name('profile.update');
        Route::get('/regtraining/{id_training}', 'RegTrainingController@index')
            ->name('regtraining');
        Route::post('/regconfirm', 'RegTrainingController@store')
            ->name('regconfirm');
        Route::get('/printCard/{id_training_registration}', 'RegTrainingController@printCard')
            ->name('printCard');       
        Route::get('/qrcode', 'QRCodeController@index')
            ->name('qrcode');
        Route::get('/certificate/{id_training_registration}', 'RegTrainingController@Certificate')
            ->name('certificate');
        // Route::get('/sertif',[\App\Http\Controllers\User\RegTrainingController::class, 'Certificate']);
        Route::get('/download/{id_training_registration}', 'QRCodeController@download')
            ->name('download');
    });
