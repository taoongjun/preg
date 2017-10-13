<?php

namespace Preg;

use Preg\Email;

class Preg
{
    public static $instance;

    public static function email($str)
    {
        self::$instance = new Email($str);

        return new static();
    }

    public static function is()
    {
        return (self::$instance)->preg;
    }

    public static function get()
    {
        return ((self::$instance)->match)[0] ?? false;
    }

    public static function mode()
    {
        return (self::$instance)->mode ?? false;
    }
}
