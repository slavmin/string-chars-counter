<?php

namespace Slavmin\StringCharsCounter;

class Counter
{
    public static function strLen(string $str): int
    {
        return mb_strlen($str);
    }
}