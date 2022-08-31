<?php

namespace App\Http\Controllers;

use App\FeaturedImage;
use App\News;
use App\Widget;
use Illuminate\Routing\Controller as BaseController;
use TCG\Voyager\Models\Post;

class WidgetController extends BaseController
{

    public function HomepageWidgets()
    {
        $widget = new Widget();
        $news = new News();
        $featuredImage = new FeaturedImage();

        $haberSlider = $news->getNewsWithLimit(3);
        $spotlightItems = $featuredImage->getFeaturedImages();
        $ikiUstYaziAltResim = $widget->getWidgetByAlias('ikiUstYaziAltResim');
        $solResimSagYazi = $widget->getWidgetByAlias('solResimSagYazi');

        return view('pages.homePage', compact('solResimSagYazi', 'spotlightItems', 'ikiUstYaziAltResim', 'haberSlider'));
    }

    public function AboutPageWidgets()
    {
        $widget = new Widget();
        $news = new News();

        $ikiUstYaziAltResim = $widget->getWidgetByAlias('ikiUstYaziAltResim');
        $ikiResimIkiYazi = $widget->getWidgetByAlias('ikiResimIkiYazi');
        $haberSlider = $news->getNewsWithLimit(3);


        return view('pages.aboutUsPage', compact('ikiResimIkiYazi', 'ikiUstYaziAltResim', 'haberSlider'));

    }

    public function NewsPageWidgets()
    {
        $widget = new News();
        $tumHaberler = $widget->getAllNewsWithEditorAndCategory();
        $haberSlider = $widget->getNewsWithLimit(3);

        return view('pages.blogList', compact('tumHaberler', 'haberSlider'));
    }

    public function NewsDetailPageWidgets($slug)
    {
        if ($slug) {
            $widget = new News();
            $haberDetay = $widget->getNewsBySlug($slug);
            return view('pages.blogDetailPage', compact('haberDetay'));

        } else {
            return view('pages.homePage');
        }

    }


}
