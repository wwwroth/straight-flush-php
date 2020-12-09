<?php

namespace Poker\Utilities;

class Console
{
    public static function info(string $text, $exit = 0)
    {
        echo "[".date('Y-m-d h:m:s')."] [INFO] " . $text . PHP_EOL;
        if ($exit) exit;
        return true;
    }

    public static function error(string $text, $exit = 0)
    {
        echo "[".date('Y-m-d h:m:s')."] [ERROR] " . $text . PHP_EOL;
        if ($exit) exit;
        return true;
    }
}