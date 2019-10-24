<?php

declare(strict_types = 1);

namespace fork_unreal4u\TelegramAPI\Telegram\Types\Custom;

use Psr\Log\LoggerInterface;
use fork_unreal4u\TelegramAPI\Abstracts\TraversableCustomType;
use fork_unreal4u\TelegramAPI\Telegram\Types\User;

/**
 * Mockup class to generate a real telegram update representation
 */
class UserArray extends TraversableCustomType
{
    public function __construct(array $data = null, LoggerInterface $logger = null)
    {
        if (count($data) !== 0) {
            foreach ($data as $id => $chatMember) {
                $this->data[$id] = new User($chatMember, $logger);
            }
        }
    }
}
