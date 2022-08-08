<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Menu extends Model
{
    protected $table = 'menus';


    public function getMenus()
    {
        DB::table($this->table)->get();
    }
}
