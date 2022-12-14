<?php

namespace App\Http\Controllers;

use App\Category;
use App\FeaturedImage;
use App\FrequentlyAskedQuestion;
use App\Menu;
use App\News;
use App\Service;
use App\Widget;
use Illuminate\Routing\Controller as BaseController;
use TCG\Voyager\Models\Post;
use Stichoza\GoogleTranslate\GoogleTranslate;


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
        $footerMainItems = $menus->getMainMenuByName('footer_menu');
        $footerSubMenuItems = $menus->getSubMenuItemsBy('footer_menu');
        $ikiUstYaziAltResim = $widget->getWidgetByAlias('ikiUstYaziAltResim');
        $solResimSagYazi = $widget->getWidgetByAlias('solResimSagYazi');


        return view('pages.homePage', compact('solResimSagYazi', 'spotlightItems', 'ikiUstYaziAltResim','footerSubMenuItems', 'footerMainItems','mainMenuItems' ,'haberSlider'));
    }

    public function AboutPageWidgets()
    {
        $widget = new Widget();
        $news = new News();
        $menus = new Menu();

        $mainMenuItems = $menus->getMenusByName('main_menu');
        $footerMainItems = $menus->getMainMenuByName('footer_menu');
        $footerSubMenuItems = $menus->getSubMenuItemsBy('footer_menu');
        $ikiUstYaziAltResim = $widget->getWidgetByAlias('ikiUstYaziAltResim');
        $ikiResimIkiYazi = $widget->getWidgetByAlias('ikiResimIkiYazi');
        $haberSlider = $news->getNewsWithLimit(3);


        return view('pages.aboutUsPage', compact('ikiResimIkiYazi','footerSubMenuItems' , 'footerMainItems' , 'mainMenuItems' ,'ikiUstYaziAltResim', 'haberSlider'));

    }

    public function NewsPageWidgets()
    {

        $menus = new Menu();
        $widget = new News();
        $menus = new Menu();


        $haberSlider = $widget->getNewsWithLimit(3);
        $tumHaberler = $widget->getAllNewsWithEditorAndCategory();
        $mainMenuItems = $menus->getMenusByName('main_menu');
        $footerMainItems = $menus->getMainMenuByName('footer_menu');
        $footerSubMenuItems = $menus->getSubMenuItemsBy('footer_menu');


        return view('pages.blogList', compact('tumHaberler','footerMainItems','mainMenuItems', 'footerSubMenuItems','mainMenuItems','haberSlider'));
    }

    public function NewsDetailPageWidgets($slug)
    {

        $menus = new Menu();

        $mCategories = new Category();

        $categories = $mCategories->getCategories();

        $mainMenuItems = $menus->getMenusByName('main_menu');
        $footerMainItems = $menus->getMainMenuByName('footer_menu');
        $footerSubMenuItems = $menus->getSubMenuItemsBy('footer_menu');


        if ($slug) {
            $widget = new News();
            $serviceDetail = $widget->getNewsBySlug($slug);
            return view('pages.blogDetailPage', compact('serviceDetail','categories', 'footerMainItems','footerSubMenuItems', 'mainMenuItems'));

        } else {
            return view('pages.homePage');
        }

    }

    public function ServiceDetailPageWidgets($slug)
    {

        $menus = new Menu();
        $mCategories = new Category();

        $categories = $mCategories->getCategories();

        $mainMenuItems = $menus->getMenusByName('main_menu');
        $footerMainItems = $menus->getMainMenuByName('footer_menu');
        $footerSubMenuItems = $menus->getSubMenuItemsBy('footer_menu');



        if ($slug) {
            $widget = new Service();
            $faqs = new FrequentlyAskedQuestion();


            $serviceDetail = $widget->getServiceBySlug($slug);
            $subServices =  $widget->getSubServicesByParent($slug);
            $frequentlyAskedQuestions = $faqs->getItemsByServiceSlug($slug);

            return view('pages.serviceDetailPage', compact('serviceDetail' , 'footerMainItems',"subServices",'frequentlyAskedQuestions', 'categories','footerSubMenuItems', 'mainMenuItems'));

        } else {
            return view('pages.homePage');
        }

    }

    public function ContactPageWidgets()
    {
        $menus = new Menu();
        $mainMenuItems = $menus->getMenusByName('main_menu');
        $footerMainItems = $menus->getMainMenuByName('footer_menu');
        $footerSubMenuItems = $menus->getSubMenuItemsBy('footer_menu');

        return view('pages.contactPage', compact('footerMainItems','mainMenuItems','footerSubMenuItems'));
    }

    public function ServicesPageWidgets()
    {
        $menus = new Menu();
        $mServices = new Service();

        $services           =  $mServices->getServices(10);
        $subServices        =  $mServices->getSubServices();
        $mainMenuItems      =  $menus->getMenusByName('main_menu');
        $footerMainItems    =  $menus->getMainMenuByName('footer_menu');
        $footerSubMenuItems =  $menus->getSubMenuItemsBy('footer_menu');

        return view('pages.servicesPage', compact('footerMainItems', 'services','mainMenuItems', 'subServices','footerSubMenuItems'));
    }

    public function InformationPoolWidgets()
    {

        $menus = new Menu();
        $faqs = new FrequentlyAskedQuestion();

        $frequentlyAskedQuestions =  $faqs->getItems();
        $mainMenuItems = $menus->getMenusByName('main_menu');
        $footerMainItems = $menus->getMainMenuByName('footer_menu');
        $footerSubMenuItems = $menus->getSubMenuItemsBy('footer_menu');


        return view('pages.informationPoolPage', compact('footerMainItems','mainMenuItems', 'frequentlyAskedQuestions','footerSubMenuItems'));
    }



}
