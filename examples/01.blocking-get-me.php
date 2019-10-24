<?php

declare(strict_types = 1);

include __DIR__.'/basics.php';

use React\EventLoop\Factory;
use \fork_unreal4u\TelegramAPI\HttpClientRequestHandler;
use fork_unreal4u\TelegramAPI\Telegram\Methods\GetMe;
use fork_unreal4u\TelegramAPI\TgLog;

$loop = Factory::create();
$tgLog = new TgLog(BOT_TOKEN, new HttpClientRequestHandler($loop));

$response = Clue\React\Block\await($tgLog->performApiRequest(new GetMe()), $loop);
var_dump($response);
