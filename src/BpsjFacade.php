<?php

namespace Faiznurullah\Gemini;

use Illuminate\Support\Facades\Facade;

class GeminiFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'BpjsService';
    }
}