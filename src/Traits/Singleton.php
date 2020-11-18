<?php

namespace Goldeimer\PhpUtil\Traits;

trait Singleton
{
    private static $instance;

    final public static function getInstance()
    {
        if (! (self::$instance instanceof self)) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}
