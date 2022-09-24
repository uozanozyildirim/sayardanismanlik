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
//        ->paginate( $pagination)
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
