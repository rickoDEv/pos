<?php

namespace Rickodev\Pos\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rickodev\Pos\Pos
 */
class Pos extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Rickodev\Pos\Pos::class;
    }
}
