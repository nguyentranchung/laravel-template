<?php

namespace Admin\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Admin\Admin
 */
class Admin extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'admin';
    }
}
