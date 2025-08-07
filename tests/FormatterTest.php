<?php

namespace DeveloperAnnur\Belajar\PHP\MVC;

use Monolog\Formatter\JsonFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Test\TestCase;
use Monolog\Logger;
use Monolog\Processor\GitProcessor;
use Monolog\Processor\HostnameProcessor;
use Monolog\Processor\MemoryUsageProcessor;

class FormatterTest extends TestCase
{
    public function testFormatter()
    {
        $logger = new Logger(FormatterTest::class);

        $handler = new StreamHandler("php://stderr");
        $handler->setFormatter(new JsonFormatter());

        $logger->pushHandler($handler);
        $logger->pushProcessor(new GitProcessor());
        $logger->pushProcessor(new MemoryUsageProcessor());
        $logger->pushProcessor(new HostnameProcessor);

        $logger->info("Belajar PHP Logging", ["username" => "zaenal"]);
        $logger->info("Belajar PHP Logging Lagi", ["username" => "zaenal"]);

        self::assertNotNull($logger);
    }
}