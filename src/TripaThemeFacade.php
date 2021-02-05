<?php

namespace Gerbesf\TripaTheme;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Gerbesf\TripaTheme\Skeleton\SkeletonClass
 */
class TripaThemeFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tripa-theme';
    }
}
