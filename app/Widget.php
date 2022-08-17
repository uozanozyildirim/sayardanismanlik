<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Widget extends Model
{
    protected $table = 'widgets';


    public function getAllWidgets()
    {
        DB::table($this->table)->get();
    }

}
