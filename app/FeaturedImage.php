<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class FeaturedImage extends Model
{
    protected $table = 'featured_images';

    public function getFeaturedImages()
    {
       return DB::table($this->table)->get();
    }
}
