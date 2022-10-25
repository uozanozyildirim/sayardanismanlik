<?php

namespace App\Http\Controllers;

use App\Category;
use App\FrequentlyAskedQuestion;
use App\Menu;
use App\Service;
use Illuminate\Http\Request;

class StaticPageController extends Controller
{



    public function kvvkPage()
    {

        $menus = new Menu();
        $mCategories = new Category();

        $categories = $mCategories->getCategories();
        $mainMenuItems = $menus->getMenusByName('main_menu');
        $footerMainItems = $menus->getMainMenuByName('footer_menu');
        $footerSubMenuItems = $menus->getSubMenuItemsBy('footer_menu');


        return view('pages.kvvkRules', compact('footerMainItems','mainMenuItems','categories','footerSubMenuItems'));

    }


    public function cookiePage()
    {

        $menus = new Menu();
        $mCategories = new Category();

        $categories = $mCategories->getCategories();
        $mainMenuItems = $menus->getMenusByName('main_menu');
        $footerMainItems = $menus->getMainMenuByName('footer_menu');
        $footerSubMenuItems = $menus->getSubMenuItemsBy('footer_menu');


        return view('pages.kvvkRules', compact('footerMainItems','mainMenuItems','categories','footerSubMenuItems'));

    }



}
