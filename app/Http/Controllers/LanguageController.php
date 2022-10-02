<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Cookie;

class LanguageController extends Controller
{
    public function changeLocaleLanguage(Request $request) {


        $language = $request['language'];
        app()->setLocale($language);

        Cookie::queue(cookie('Language', $language, '240'));

        return back();
    }

}
