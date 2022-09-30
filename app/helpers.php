<?php

function changeDateFormate($date,$date_format){
    return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format($date_format);
}

function productImagePath($image_name)
{
    return public_path('images/products/'.$image_name);
}

function translateToEnglish($text)
{


    $locale = \Illuminate\Support\Facades\Cookie::get('Language');

    if($locale == 'En' & empty($text) == 0)
    {
    return  Stichoza\GoogleTranslate\GoogleTranslate::trans($text, 'en', 'tr');
    }
    else
    {
        return $text;
    }

}
