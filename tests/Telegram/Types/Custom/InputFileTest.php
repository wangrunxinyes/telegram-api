<?php

namespace fork_unreal4u\TelegramAPI\tests\Telegram\Types\Custom;

use PHPUnit\Framework\TestCase;
use fork_unreal4u\TelegramAPI\Telegram\Types\Custom\InputFile;

class InputFileTest extends TestCase
{
    /**
     * @expectedException \fork_unreal4u\TelegramAPI\Exceptions\FileNotReadable
     */
    public function testInvalidFile()
    {
        new InputFile('non-existant-file.txt');
    }
}
