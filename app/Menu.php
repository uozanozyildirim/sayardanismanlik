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

    public function getMenusByName($name)
    {
        return
            DB::table('menu_items')
                ->join('menus', 'menu_items.menu_id', '=', 'menus.id')
                ->where('menus.name', $name)
                ->select('menu_items.*', 'menus.name as menu_title')
                ->orderBy('menu_items.order')
                ->get();

    }

    public function getMainMenuByName($name)
    {
        return   DB::table('menu_items')
                ->join('menus', 'menu_items.menu_id', '=', 'menus.id')
                ->where('menus.name', $name)
                ->where('menu_items.parent_id', '=', null)
                ->select('menu_items.*', 'menus.name as menu_title')
                ->orderBy('menu_items.order')
                ->get();

    }

    public function getSubMenuItemsBy($name)

    {
        return   DB::table('menu_items')
            ->join('menus', 'menu_items.menu_id', '=', 'menus.id')
            ->where('menus.name', $name)
            ->where('menu_items.parent_id', '!=', null)
            ->select('menu_items.*', 'menus.name as menu_title')
            ->orderBy('menu_items.order')
            ->get();

    }
}

