<?php

namespace Litecms\Team\Facades;

use Illuminate\Support\Facades\Facade;

class Team extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'litecms.team';
    }
}
