<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'WidgetController@HomepageWidgets');
Route::get('/anasayfa', 'WidgetController@HomepageWidgets');
Route::get('/hakkimizda', 'WidgetController@AboutPageWidgets');
Route::get('/haberler', 'WidgetController@NewsPageWidgets');
Route::get('/haber/{{slug}}', 'WidgetController@NewsDetailPageWidgets');
//Route::view('/projeler', 'pages.projectsListPage');
//Route::view('/haberler', 'pages.blogList');
Route::view('/iletisim', 'pages.contactPage');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
