<?php

namespace Tests\Unit;

use App\Widget;
use App\Menu;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;


class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testGetMenus()
    {
       $widgets =  DB::table('widgets')->get();
       $jsonItems =   json_decode($widgets[0]->fields, true);

       dump($jsonItems);

        $this->assertTrue(true);

    }

}
