<?php

namespace Tests\ShopBundle\Smoke\Http;

class RouteConfigCustomizer
{
    /**
     * @var \Tests\ShopBundle\Smoke\Http\RouteConfig[]|null
     */
    private $routeConfigs;

    public function __construct(array $routeConfigs)
    {
        $this->routeConfigs = $routeConfigs;
    }

    /**
     * Provided $callback will be called with RouteConfig as a single argument
     *
     * @see \Tests\ShopBundle\Smoke\Http\RouteConfig
     * @param callable $callback
     * @return \Tests\ShopBundle\Smoke\Http\RouteConfigCustomizer
     */
    public function customize($callback)
    {
        array_map($callback, $this->routeConfigs);

        return $this;
    }
}
