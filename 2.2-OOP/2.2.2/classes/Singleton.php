<?php
/**
 * Author: avsudnichnikov (alsdew@ya.ru)
 * Date: 19.04.2019
 * Time: 17:19
 */

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