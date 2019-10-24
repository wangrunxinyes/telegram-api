<?php

declare(strict_types = 1);

namespace fork_unreal4u\TelegramAPI\Telegram\Methods;

use Psr\Log\LoggerInterface;
use fork_unreal4u\TelegramAPI\Abstracts\TelegramMethods;
use fork_unreal4u\TelegramAPI\Abstracts\TelegramTypes;
use fork_unreal4u\TelegramAPI\InternalFunctionality\TelegramResponse;
use fork_unreal4u\TelegramAPI\Telegram\Types\Custom\ResultBoolean;

/**
 * Use this method for your bot to leave a group, supergroup or channel. Returns True on success
 *
 * Objects defined as-is july 2016
 *
 * @see https://core.telegram.org/bots/api#leavechat
 */
class LeaveChat extends TelegramMethods
{
    /**
     * Unique identifier for the target group or username of the target supergroup (in the format @supergroupusername)
     * @var string
     */
    public $chat_id = '';

    public static function bindToObject(TelegramResponse $data, LoggerInterface $logger): TelegramTypes
    {
        return new ResultBoolean($data->getResultBoolean(), $logger);
    }

    public function getMandatoryFields(): array
    {
        return [
            'chat_id',
        ];
    }
}
