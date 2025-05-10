<?php

namespace Bastiaigner\DynamicResource\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bastiaigner\DynamicResource\DynamicResource
 */
class DynamicResource extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Bastiaigner\DynamicResource\DynamicResource::class;
    }
}
