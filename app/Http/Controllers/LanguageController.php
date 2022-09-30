<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function changeLocaleLanguage(Request $request) {


        $language = $request['language'];

        app()->setLocale($language);

        return 'language successfully changed';

    }

}
