<?php

declare(strict_types=1);

namespace App\Domain\User\Exception;

class WithLTestException extends \RuntimeException
{
    public function __construct()
    {
        parent::__construct(
            l('string using l')
        );
    }
}