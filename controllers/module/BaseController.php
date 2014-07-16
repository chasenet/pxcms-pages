<?php namespace Cysha\Modules\Forum\Controllers\Module;

use Cysha\Modules\Core\Controllers\BaseModuleController as CoreController;
use URL;

class BaseController extends CoreController
{

    public function __construct()
    {
        parent::__construct();

        $this->objTheme->breadcrumb()->add('Forum', URL::route('pxcms.forum.index'));
    }

}
