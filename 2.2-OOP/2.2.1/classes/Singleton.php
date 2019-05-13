<?php

class Singleton
{
    protected static $instance;

    private function __construct()
    {
    }

    private function __clone()
    {
        throw new Error('Not clonable..');
    }

    private function __wakeup()
    {
    }

    public static function init()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}