<?php namespace Wheredidgogogo\Nameparser;

use Illuminate\Support\Facades\Facade;

class NameparserFacade extends Facade {

    protected static function getFacadeAccessor() {
        return 'wheredidgogogo-nameparser';
    }

}