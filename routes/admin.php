<?php
Route::group(['namespace' => 'Admin'],function(){
    Route::get('admin/login','LoginController@showLoginForm')->name('admin.login');    
    Route::post('login', 'LoginController@adminLogin');
    Route::post('logout', 'LoginController@logout')->name('admin.logout');

    Route::group(['middleware'=>'auth:admin','prefix'=>'admin'],function(){
        Route::get('/dashboard', 'DashboardController@dashboardView')->name('admin.deshboard');
        Route::get('/course/list','CourseController@CourseList')->name('admin.course_list');
        Route::post('/course/insert','CourseController@CourseInsert')->name('admin.course_insert');

        
        Route::get('/student/insert/form','StudentController@studentInsertForm')->name('admin.student_insert_form');
        Route::post('/student/insert','StudentController@studentInsert')->name('admin.student_insert');
    });

});
