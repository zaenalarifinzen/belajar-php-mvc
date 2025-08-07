<?php

namespace DeveloperAnnur\Belajar\PHP\MVC;

use Monolog\Handler\RotatingFileHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Test\TestCase;

class RotatingFIleTest extends TestCase
{
    public function testRotating()
    {
        $logger = new Logger(RotatingFIleTest::class);
        $logger->pushHandler(new StreamHandler("php://stderr"));
        $logger->pushHandler(new RotatingFileHandler(__DIR__ . "/../app.log", 10,Logger::INFO));

        $logger->info("Belajar PHP");
        $logger->info("Belajar OOP");
        $logger->info("Belajar Web");
        $logger->info("Belajar MVC");

        self::assertNotNull($logger);
    }
}