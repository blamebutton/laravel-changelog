<?php

namespace BlameButton\Laravel\Changelog;

use Illuminate\Support\Facades\Facade;

/**
 * @method string|null raw()
 *
 * @see \BlameButton\Laravel\Changelog\Changelog
 */
class ChangelogFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'changelog';
    }
}
