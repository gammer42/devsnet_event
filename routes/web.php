<?php



Route::get('/','HomeController@home')->name('home');

Route::get('/about_us','HomeController@about_us')->name('about_us');

Route::get('/service','HomeController@service')->name('service');

Route::get('/portfolio','HomeController@portfolio')->name('portfolio');

Route::get('/blog','HomeController@blog')->name('blog');

Route::get('/single_blog','HomeController@single_blog')->name('single_blog');

Route::get('/elements','HomeController@elements')->name('elements');

Route::get('/contact','HomeController@contact')->name('contact');

