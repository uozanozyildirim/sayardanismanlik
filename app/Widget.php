<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;



class Widget extends Model
{
    protected $table = 'widgets';

    public function getAllWidgets()
    {
        DB::table('widgets')->get();
    }


    public function getWidgetByAlias($alias)
    {
        $widgets    =  DB::table('widgets')->where('alias', $alias)->first();

        $widgetData = json_decode($widgets->fields, true);

        return $widgetData;

    }

}
