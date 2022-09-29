<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'WidgetController@HomepageWidgets');
Route::get('/anasayfa', 'WidgetController@HomepageWidgets');
Route::get('/hakkimizda', 'WidgetController@AboutPageWidgets');
Route::get('/haberler', 'WidgetController@NewsPageWidgets');
Route::get('/haber/{slug}', 'WidgetController@NewsDetailPageWidgets');
Route::get('/hizmet/{slug}', 'WidgetController@ServiceDetailPageWidgets');
Route::get('/bilgi-havuzu', 'WidgetController@InformationPoolWidgets');
Route::get('/hizmetler', 'WidgetController@ServicesPageWidgets');
Route::get('/iletisim', 'WidgetController@ContactpageWidgets');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
