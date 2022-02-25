<?php

namespace Admin\Admin\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Admin\Admin\Admin
 */
class Admin extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'admin';
    }
}
