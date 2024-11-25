<?php

declare(strict_types=1);

namespace App;

use Exception;

class HelloWorld
{
    public string $say {
        set => throw new Exception('直の代入はできない');
        get => 'Hello World';
    }
}
