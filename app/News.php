<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;



class News extends Model
{
    protected $table = 'posts';

    public function getAllNews()
    {
        DB::table($this->table)->get();
    }


    public function getNewsByCategory($category_id)
    {
        DB::table($this->table)->where('category_id', $category_id)->get();
    }

    public function getNewsByAlias($alias)
    {
        $widgets    =  DB::table('widgets')->where('alias', $alias)->first();

        $widgetData = json_decode($widgets->fields, true);

        return $widgetData;

    }

}
