<?php

declare(strict_types = 1);

namespace fork_unreal4u\TelegramAPI\Exceptions;

class MissingMandatoryField extends \RuntimeException
{
    public $method;

    public $methodInstance;
}
