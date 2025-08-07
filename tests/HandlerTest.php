<?php

namespace DeveloperAnnur\Belajar\PHP\MVC;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Test\TestCase;

class HandlerTest extends TestCase
{
    public function testHandler()
    {
        $logger = new Logger(HandlerTest::class);

        $logger->pushHandler(new StreamHandler("php://stderr"));
        $logger->pushHandler(new StreamHandler(__DIR__ . '/../application.log'));

        self::assertNotNull($logger);
        self::assertEquals(2, sizeof($logger->getHandlers()));
    }
}