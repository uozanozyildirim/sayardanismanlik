<?php

namespace App\Http\Controllers;

use App\Widget;
use Illuminate\Routing\Controller as BaseController;

class WidgetController extends BaseController
{

    public function HomepageWidgets()
    {
        $widget =  new Widget();
        $solResimSagYazi   = $widget->getWidgetByAlias('solResimSagYazi');
        $ikiUstYaziAltResim = $widget->getWidgetByAlias('ikiUstYaziAltResim');
        $news = new News();

        return view('pages.homePage', compact('solResimSagYazi', 'ikiUstYaziAltResim'));
    }

    public function AboutPageWidgets()
    {
        $widget =  new Widget();
        $ikiUstYaziAltResim = $widget->getWidgetByAlias('ikiUstYaziAltResim');
        $ikiResimIkiYazi = $widget->getWidgetByAlias('ikiResimIkiYazi');

        return view('pages.aboutUsPage', compact('ikiResimIkiYazi', 'ikiUstYaziAltResim'));

    }


}
