<?php

namespace Tests\Unit;

use App\Room;
use PHPUnit\Framework\TestCase;

class RoomTest extends TestCase
{
    public function test_the_room_constructor()
    {
        https://betterstack.com/community/guides/testing/laravel-unit-testing/#prerequisites
        $room = new Room(['Andor', 'Bela', 'Cecil']);
        $this->assertTrue($room->has('Andor'));
        // $this->assertTrue($room->has('Xavier'));
        $this->assertFalse($room->has('Xavier'));
    }

    public function test_adding_to_room()
    {
        $room = new Room();
        $room->add('Andor');
        $this->assertContains('Andor', $room->getPeople());
    }

    public function test_removing_from_room()
    {
        $room = new Room(['Andor', 'Bela', 'Cecil']);
        $this->assertContains('Bela', $room->getPeople());
        $room->remove('Bela');
        $this->assertNotContains('Bela', $room->getPeople());
    }
}
