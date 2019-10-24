<?php

namespace fork_unreal4u\TelegramAPI\tests\Mock;

use React\Promise\Deferred;
use React\Promise\PromiseInterface;
use fork_unreal4u\TelegramAPI\InternalFunctionality\TelegramResponse;
use fork_unreal4u\TelegramAPI\RequestHandlerInterface;

class MockRequestHandler implements RequestHandlerInterface
{
    public function post(string $filename, array $formFields): PromiseInterface
    {
        $deferred = new Deferred();

        $contents = file_get_contents($filename);

        $deferred->resolve(new TelegramResponse($contents));
        return $deferred->promise();
    }

    public function get(string $filename): PromiseInterface
    {
        $deferred = new Deferred();

        $contents = file_get_contents($filename);

        $deferred->resolve(new TelegramResponse($contents));
        return $deferred->promise();
    }
}