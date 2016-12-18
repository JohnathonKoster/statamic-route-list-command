<?php

namespace Statamic\Addons\RouteList\Commands;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Console\RouteListCommand as IlluminateRouteListCommand;

class RouteListCommand extends IlluminateRouteListCommand
{
    
    public function __construct()
    {
        parent::__construct(app(Router::class));
    }

}
