<?php namespace Teepluss\Api\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class API
 * @package Teepluss\Api\Facades
 *
 * @method static mixed delete() delete(string $uri)
 * @method static mixed get() get(string $uri)
 * @method static mixed patch() patch(string $uri, array $parameters)
 * @method static mixed post() post(string $uri, array $parameters)
 * @method static mixed put() put(string $uri, array $parameters)
 */
class API extends Facade {

    /**
     * Get the registered name of the component.
     *
     * If you got a problem about this facade
     * you may checking on sensitive case.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'api.request'; }

}