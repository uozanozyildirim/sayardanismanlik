<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class LanguageController extends Controller
{
    public function changeLocaleLanguage(Request $request) {


        $language = $request['language'];
        app()->setLocale($language);

        Cookie::queue(cookie('Language', $language, '120'));

        return 'Kullanıcı Diliniz '.$language. 'Olarak Değişti';

    }

}
