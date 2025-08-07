<?php

namespace DeveloperAnnur\Belajar\PHP\MVC;

use Monolog\Logger;
use Monolog\Test\TestCase;

class LoggerTest extends TestCase
{
    public function testLogger()
    {
        $logger = new Logger("NgajiFuadi");

        self::assertNotNull($logger);
    }

    public function testLoggerWithName()
    {
        $logger = new Logger(LoggerTest::class);

        self::assertNotNull($logger);
    }
}