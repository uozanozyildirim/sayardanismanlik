<?php

use Illuminate\Support\Facades\Redis;

function changeDateFormate($date, $date_format){
    return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format($date_format);
}

function productImagePath($image_name)
{
    return public_path('images/products/'.$image_name);
}

function translateToEnglish($text)
{

    $locale = \Illuminate\Support\Facades\Cookie::get('Language');

    // check first is the data exists in redis and get the data from there if data exists
    // and if data is not exists in redis than translate text

    $redis = Redis::connection();


    if($locale == 'En' & empty($text) == 0)
    {

        if($redis->get($text))
        {
            return  $redis->get($text);
        }
        else
        {
            $translatedText = Stichoza\GoogleTranslate\GoogleTranslate::trans($text, 'en', 'tr');
            $redis->set($text, $translatedText);

            return $translatedText;

        }
    }
    else
    {
        return $text;
    }




}
