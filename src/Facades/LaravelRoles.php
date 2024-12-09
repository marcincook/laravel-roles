<?php

namespace Marcincook\LaravelRoles\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Marcincook\LaravelRoles\LaravelRoles
 */
class LaravelRoles extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Marcincook\LaravelRoles\LaravelRoles::class;
    }
}
