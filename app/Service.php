<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Service extends Model
{
    protected $table = 'services';

    protected $categoryTable  = 'categories';


    public function getServices($pagination = 5)
    {
       return  DB::table($this->table)
        ->select('services.*')
        ->where('parent_id', '=', NULL)
        ->get();
    }


    public function getSubServicesByParent($parentServiceSlug)
    {
        $parentServiceId = DB::table($this->table)
            ->select('services.id')
            ->where('slug', '=', $parentServiceSlug)
            ->first();

        $parentServiceId = $parentServiceId->id;

        return  DB::table($this->table)
            ->select('*')
            ->where('parent_id', '=', $parentServiceId)
            ->get();
    }


    public function getSubServices()
    {

        return  DB::table($this->table)
            ->select('services.*')
            ->where('services.parent_id', '=!', NULL)
            ->get();
    }



    public function getServiceBySlug($slug)
    {
        return  DB::table($this->table)
            ->where('services.slug', '=', $slug)
            ->join($this->categoryTable, 'categories.id', '=', 'services.category')
            ->select('services.*', 'categories.name as category_title','categories.slug as category_slug' )
            ->first();

    }


}
