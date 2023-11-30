<?php

namespace Traits;

trait LoggerTrait // traits
{
    public function log($message)
    {
        echo "[" . date('Y-m-d H:i:s') . "] " . $message . PHP_EOL;
    }
}
