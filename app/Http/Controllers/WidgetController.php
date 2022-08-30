<?php

namespace App\Http\Controllers;

use App\News;
use App\Widget;
use Illuminate\Routing\Controller as BaseController;
use TCG\Voyager\Models\Post;

class WidgetController extends BaseController
{

    public function HomepageWidgets()
    {
        $widget =  new Widget();
        $news = new News();
        $solResimSagYazi   = $widget->getWidgetByAlias('solResimSagYazi');
        $ikiUstYaziAltResim = $widget->getWidgetByAlias('ikiUstYaziAltResim');
        $haberSlider = $news->getNewsWithLimit(3);

        return view('pages.homePage', compact('solResimSagYazi', 'ikiUstYaziAltResim', 'haberSlider'));
    }

    public function AboutPageWidgets()
    {
        $widget =  new Widget();
        $news = new News();

        $ikiUstYaziAltResim = $widget->getWidgetByAlias('ikiUstYaziAltResim');
        $ikiResimIkiYazi = $widget->getWidgetByAlias('ikiResimIkiYazi');
        $haberSlider = $news->getNewsWithLimit(3);


        return view('pages.aboutUsPage', compact('ikiResimIkiYazi', 'ikiUstYaziAltResim', 'haberSlider'));

    }

    public function NewsPageWidgets()
    {
        $widget =  new News();
        $tumHaberler = $widget->getAllNewsWithEditorAndCategory();
        $haberSlider = $widget->getNewsWithLimit(3);

        return view('pages.blogList', compact('tumHaberler', 'haberSlider'));
    }

    public function NewsDetailPageWidgets($slug)
    {
        $widget =  new News();
        $tumHaberler = $widget->getNewsBySlug($slug);
        return view('pages.blogDetailPage', compact('tumHaberler'));
    }


}
