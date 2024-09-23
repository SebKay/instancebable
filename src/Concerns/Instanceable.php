<?php

namespace SebKay\Concerns;

trait Instanceable
{
    protected static $instance;

    public static function instance(...$args): static
    {
        return static::$instance ??= new static(...$args);
    }
}
