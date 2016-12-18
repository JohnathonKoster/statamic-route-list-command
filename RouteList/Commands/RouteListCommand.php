<?php

namespace Statamic\Addons\RouteList\Commands;

use Illuminate\Routing\Router;
use Statamic\CP\Router as StatamicRouter;
use Illuminate\Foundation\Console\RouteListCommand as IlluminateRouteListCommand;

class RouteListCommand extends IlluminateRouteListCommand
{
    public function __construct()
    {
        /** @var StatamicRouter $statamicRouter */
        $statamicRouter = app(StatamicRouter::class);
        $statamicRouter->bindAddonRoutes();

        parent::__construct(app(Router::class));
    }

}
