<?php

namespace Preg;

use Preg\PregInterface;

class Email implements PregInterface
{
    // 邮箱的匹配模式
    public $mode = '/\w+([−+.]\w+)*@\w+([−.]\w+)*\.\w+([−.]\w+)*/';

    public $preg;

    public $match;

    public function __construct($str)
    {
        $preg = preg_match($this->mode, $str, $match);

        $this->preg = $preg;

        $this->match = $match;

        $this;
    }
}
