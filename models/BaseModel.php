<?php namespace Cysha\Modules\Pages\Models;

use Cysha\Modules\Core\Models\BaseModel as CoreBaseModel;

class BaseModel extends CoreBaseModel
{
    use \Cysha\Modules\Core\Traits\LinkableTrait;

    protected $identifiableName = 'title';

    public function __construct()
    {
        parent::__construct();
    }

    public function identifiableName()
    {
        return $this->{$this->identifiableName};
    }

}
