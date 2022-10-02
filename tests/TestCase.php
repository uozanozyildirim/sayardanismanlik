<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\DB;
use League\Flysystem\Config;
use Illuminate\Support\Facades\Redis;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;



    public function test_on_DB($slug = "cevre-ve-atik-yonetimi")
    {

        $serviceId =
            DB::table('services')
                ->where('slug', '=', $slug)
                ->select('id')
                ->first();

        $serviceId = $serviceId->id;


        $item =  DB::table('frequently_asked_questions')
                ->where('frequently_asked_questions.service_id', '=', $serviceId)
                ->orderByDesc('id')
                ->get();

        var_dump($item);


    }


    public function test_get_locale()
    {
        app()->setLocale('en');
        $locale = app()->getLocale();

        return $locale;

    }

    public function test_redis_connect_test()
    {
        $redis = Redis::connection();
        $redis->set('name', 'Dave');
        $name = $redis->get('name');
        }

}
