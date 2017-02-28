<?php
declare(strict_types=1);

use App\SimpleFactory\Door;
use App\SimpleFactory\DoorFactory;
use PHPUnit\Framework\TestCase;

final class DoorFactoryTest extends TestCase
{
    public function testCanBeCreatedTheDoor()
    {
        $door = DoorFactory::makeDoor(100, 200);
        $this->assertInstanceOf(
            Door::class,
            $door
        );
    }

    public function testIfTheValuesDefinedAreCorrect()
    {
        $width = 100;
        $height = 200;
        $door = DoorFactory::makeDoor($width, $height);
        $this->assertEquals($door->getWidth(), $width);
        $this->assertEquals($door->getHeight(), $height);
    }
}