<?php
Route::group(['namespace' => 'Admin'],function(){
    Route::get('admin/login','LoginController@showLoginForm')->name('admin.login');    
    Route::post('login', 'LoginController@adminLogin');
    Route::post('logout', 'LoginController@logout')->name('admin.logout');

    Route::group(['middleware'=>'auth:admin','prefix'=>'admin'],function(){
        Route::get('/dashboard', 'DashboardController@dashboardView')->name('admin.deshboard');
        Route::get('/course/list','CourseController@CourseList')->name('admin.course_list');
        Route::post('/course/insert','CourseController@CourseInsert')->name('admin.course_insert');        
        Route::get('/course/edit/{course_id}','CourseController@CourseEdit')->name('admin.course_edit');
        Route::post('/course/update','CourseController@CourseUpdate')->name('admin.course_update');  

        
        Route::get('/student/insert/form','StudentController@studentInsertForm')->name('admin.student_insert_form');
        Route::post('/student/insert','StudentController@studentInsert')->name('admin.student_insert');

        Route::get('/student/edit/form/{id}','StudentController@studentEditForm')->name('admin.student_edit_form');
        Route::post('/student/update','StudentController@studentUpdate')->name('admin.student_update');

        Route::get('/student/list','StudentController@studentList')->name('admin.student_list');
        Route::get('/student/list/ajax','StudentController@studentListAjax')->name('admin.student_list_ajax');

        Route::get('/student/add/result/form/{id}','StudentController@studentAddResultForm')->name('admin.student_add_result_form');
        Route::post('/student/result/insert','StudentController@studentResultInsert')->name('admin.student_result_insert');
        Route::get('/student/result/view/{id}','StudentController@studentResultView')->name('admin.student_result_view');
        Route::get('/student/result/edit/{id}','StudentController@studentResultEdit')->name('admin.student_result_edit');
        Route::post('/student/result/update','StudentController@studentResultUpdate')->name('admin.student_result_update');

        Route::get('/change/password/form', 'LoginController@changePasswordForm')->name('admin.change_password_form');
        Route::post('/change/password', 'LoginController@changePassword')->name('admin.change_password');
    });

});
