<?php namespace Cysha\Modules\Pages\Controllers\Modules;


class PagesController extends BaseController
{

    public function getAbout()
    {


        return $this->setView('about', [], 'module');
    }
}
