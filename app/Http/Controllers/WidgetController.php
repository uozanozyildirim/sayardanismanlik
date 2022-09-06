<?php

namespace App\Http\Controllers;

use App\FeaturedImage;
use App\Menu;
use App\News;
use App\Widget;
use Illuminate\Routing\Controller as BaseController;
use TCG\Voyager\Models\Post;

class WidgetController extends BaseController
{

    public function HomepageWidgets()
    {
        $news = new News();
        $widget = new Widget();
        $menus = new Menu();
        $featuredImage = new FeaturedImage();

        $haberSlider = $news->getNewsWithLimit(3);
        $spotlightItems = $featuredImage->getFeaturedImages();
        $mainMenuItems = $menus->getMenusByName('main_menu');
        $footerMenuItems = $menus->getMenusByName('footer_menu');
        $ikiUstYaziAltResim = $widget->getWidgetByAlias('ikiUstYaziAltResim');
        $solResimSagYazi = $widget->getWidgetByAlias('solResimSagYazi');


        return view('pages.homePage', compact('solResimSagYazi', 'spotlightItems', 'ikiUstYaziAltResim','footerMenuItems','mainMenuItems' ,'haberSlider'));
    }

    public function AboutPageWidgets()
    {
        $widget = new Widget();
        $news = new News();
        $menus = new Menu();

        $mainMenuItems = $menus->getMenusByName('main_menu');
        $footerMenuItems = $menus->getMenusByName('footer_menu');
        $ikiUstYaziAltResim = $widget->getWidgetByAlias('ikiUstYaziAltResim');
        $ikiResimIkiYazi = $widget->getWidgetByAlias('ikiResimIkiYazi');
        $haberSlider = $news->getNewsWithLimit(3);


        return view('pages.aboutUsPage', compact('ikiResimIkiYazi','footerMenuItems','mainMenuItems','ikiUstYaziAltResim', 'haberSlider'));

    }

    public function NewsPageWidgets()
    {

        $menus = new Menu();
        $widget = new News();
        $menus = new Menu();


        $mainMenuItems = $menus->getMenusByName('main_menu');
        $footerMenuItems = $menus->getMenusByName('footer_menu');
        $haberSlider = $widget->getNewsWithLimit(3);
        $tumHaberler = $widget->getAllNewsWithEditorAndCategory();
        $mainMenuItems = $menus->getMenusByName('main_menu');
        $footerMenuItems = $menus->getMenusByName('footer_menu');

        return view('pages.blogList', compact('tumHaberler','footerMenuItems','mainMenuItems', 'footerMenuItems','mainMenuItems','haberSlider'));
    }

    public function NewsDetailPageWidgets($slug)
    {

        $menus = new Menu();


        $mainMenuItems = $menus->getMenusByName('main_menu');
        $footerMenuItems = $menus->getMenusByName('footer_menu');

        if ($slug) {
            $widget = new News();
            $haberDetay = $widget->getNewsBySlug($slug);
            return view('pages.blogDetailPage', compact('haberDetay', 'footerMenuItems','footerMenuItems'));

        } else {
            return view('pages.homePage');
        }

    }

    public function ContactPageWidgets()
    {
        $menus = new Menu();
        $mainMenuItems = $menus->getMenusByName('main_menu');
        $footerMainItems = $menus->getMainMenuByName('footer_menu');
        $footerSubMenuItems = $menus->getMainMenuByName('footer_menu');

        return view('pages.contactPage', compact('footerMainItems','mainMenuItems','footerSubMenuItems'));
    }

}
