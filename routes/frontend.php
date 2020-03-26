<?php
        

    Route::get('/', function () {
    return view('web.index');
    })->name('web.index');


    Route::get('/About', function () {
    return view('web.about.about');
    })->name('web.about.about');

    Route::get('/Gallery', function () {
        return view('web.gallery.gallery');
    })->name('web.gallery.gallery');

    // Route::get('/Class/Syllabus', function () {
    //     return view('web.syllabus.syllabus');
    // })->name('web.syllabus.syllabus');

    // Route::get('/Acheivement', function () {
    //     return view('web.acheivement.acheivement');
    // })->name('web.acheivement.acheivement');   

    Route::get('/Contact', function () {
        return view('web.contact.contact');
    })->name('web.contact.contact');

    // Route::get('/Forgot-password', function () {
    //     return view('web.forgot-password');
    // })->name('web.forgot-password');

