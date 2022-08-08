<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.homePage');
Route::view('/anasayfa', 'pages.homePage');
Route::view('/hakkimizda', 'pages.aboutUsPage');
Route::view('/projeler', 'pages.projectsListPage');
Route::view('/haber/{{slug}}', 'pages.blogDetailPage');
Route::view('/haberler', 'pages.blogList');
Route::view('/iletisim', 'pages.contactPage');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
