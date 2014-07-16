<?php namespace Cysha\Modules\Pages\Controllers\Module;


class PagesController extends BaseController
{

    public function getHome()
    {


        return $this->setView('home', [], 'module');
    }

    public function getAbout()
    {


        return $this->setView('about', [], 'module');
    }
}
