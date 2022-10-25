<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'WidgetController@HomepageWidgets')->name('anasayfa');
Route::post('/', 'LanguageController@changeLocaleLanguage')->name('anasayfa.changeLanguage');
Route::get('/anasayfa', 'WidgetController@HomepageWidgets');
Route::get('/hakkimizda', 'WidgetController@AboutPageWidgets');
Route::get('/haberler', 'WidgetController@NewsPageWidgets');
Route::get('/haber/{slug}', 'WidgetController@NewsDetailPageWidgets');
Route::get('/hizmet/{slug}', 'WidgetController@ServiceDetailPageWidgets');
Route::get('/bilgi-havuzu', 'WidgetController@InformationPoolWidgets');
Route::get('/hizmetler', 'WidgetController@ServicesPageWidgets');
Route::get('/iletisim', 'WidgetController@ContactpageWidgets');

Route::get('/kisisel-bilgileri-koruma-kanunu', 'StaticPageController@kvvkPage');
Route::get('/cerez-kullanim-sozlesmesi', 'StaticPageController@cookiePage');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
