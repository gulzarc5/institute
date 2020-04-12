<?php
        
    Route::group(['namespace' => 'Web'],function(){
        Route::get('/result','ResultController@resultFormView')->name('web.result.result'); 
        Route::post('/result/view','ResultController@resultView')->name('web.result.view'); 
    });
    Route::get('/', function () {
    return view('web.index');
    })->name('web.index');

    Route::get('/Courses', function () {
    return view('web.courses.courses');
    })->name('web.courses.courses');

    Route::get('/About', function () {
    return view('web.about.about');
    })->name('web.about.about');

    Route::get('/Gallery', function () {
        return view('web.gallery.gallery');
    })->name('web.gallery.gallery');

    

    Route::get('/Contact', function () {
        return view('web.contact');
    })->name('web.contact');

