<?php

namespace Kilrizzy\Component\Facades;

use Illuminate\Support\Facades\Facade;

class Component extends Facade{
    protected static function getFacadeAccessor() {
        return 'ComponentContract';
    }
}