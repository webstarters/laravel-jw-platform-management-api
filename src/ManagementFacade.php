<?php

namespace Webstarters\Management;

use Illuminate\Support\Facades\Facade;
/**
 * @see \Webstarters\Management\SkeletonClass
 */
class ManagementFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'management';
    }
}