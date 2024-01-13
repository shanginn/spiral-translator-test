<?php

declare(strict_types=1);

namespace App\Domain\User\Exception;

use Spiral\Translator\Traits\TranslatorTrait;

class WithSayTestException extends \RuntimeException
{
    use TranslatorTrait;

    public function __construct()
    {
        parent::__construct(
            $this->say('string using say')
        );
    }
}