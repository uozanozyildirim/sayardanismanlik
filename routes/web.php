<?php

use Illuminate\Support\Facades\Route;

Route::get('/anasayfa', 'WidgetController@HomepageWidgets');
Route::get('/', 'WidgetController@HomepageWidgets');
Route::get('/hakkimizda', 'WidgetController@AboutPageWidgets');
Route::view('/projeler', 'pages.projectsListPage');
Route::view('/haber/{{slug}}', 'pages.blogDetailPage');
Route::view('/haberler', 'pages.blogList');
Route::view('/iletisim', 'pages.contactPage');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
