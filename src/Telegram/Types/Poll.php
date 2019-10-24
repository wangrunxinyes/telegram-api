<?php

declare(strict_types=1);

namespace fork_unreal4u\TelegramAPI\Telegram\Types;

use fork_unreal4u\TelegramAPI\Abstracts\TelegramTypes;
use fork_unreal4u\TelegramAPI\Telegram\Types\Custom\PollOptionArray;

/**
 * This object contains information about a poll
 *
 * Objects defined as-is june 2019
 *
 * @see https://core.telegram.org/bots/api#poll
 */
class Poll extends TelegramTypes
{
    /**
     * Unique poll identifier
     * @var string
     */
    public $id;

    /**
     * Poll question, 1-255 characters
     * @var string
     */
    public $question = '';

    /**
     * List of poll options
     * @var PollOption[]
     */
    public $options;

    /**
     * True, if the poll is closed
     * @var bool
     */
    public $is_closed;

    public function mapSubObjects(string $key, array $data): TelegramTypes
    {
        switch ($key) {
            case 'options':
                return new PollOptionArray($data, $this->logger);
        }

        return parent::mapSubObjects($key, $data); // TODO: Change the autogenerated stub
    }
}
