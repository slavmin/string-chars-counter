<?php

namespace Slavmin\StringCharsCounter;

use Exception;

class Counter
{
    /**
     * @throws Exception
     */
    public static function strLen(?string $str): int
    {
        if (empty($str)) {
            throw new Exception('No input string');
        }

        return mb_strlen($str);
    }
}