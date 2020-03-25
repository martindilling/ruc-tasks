<?php
declare(strict_types=1);

namespace Tests;

use RucTasks\EvenOdder;
use PHPUnit\Framework\TestCase;

class EvenOdderTest extends TestCase
{
    /**
     * @test
     */
    public function can_even_low() : void
    {
        $evenOdder = EvenOdder::even();

        $this->assertEquals([2, 4, 6, 8, 10], $evenOdder->toArray());
    }

    /**
     * @test
     */
    public function can_even_high() : void
    {
        $evenOdder = EvenOdder::even(91, 100);

        $this->assertEquals([92, 94, 96, 98, 100], $evenOdder->toArray());
    }

    /**
     * @test
     */
    public function can_even_to_string() : void
    {
        $evenOdder = EvenOdder::even();

        $this->assertEquals('2 | 4 | 6 | 8 | 10', $evenOdder->toString());
    }

    /**
     * @test
     */
    public function can_even_cast_to_string() : void
    {
        $evenOdder = EvenOdder::even();

        $this->assertEquals('2 | 4 | 6 | 8 | 10', (string) $evenOdder);
    }

    /**
     * @test
     */
    public function can_even_print() : void
    {
        $this->expectOutputString('2 | 4 | 6 | 8 | 10');

        $evenOdder = EvenOdder::even();
        $evenOdder->print();
    }

    /**
     * @test
     */
    public function can_odd_low() : void
    {
        $evenOdder = EvenOdder::odd();

        $this->assertEquals([1, 3, 5, 7, 9], $evenOdder->toArray());
    }

    /**
     * @test
     */
    public function can_odd_high() : void
    {
        $evenOdder = EvenOdder::odd(91, 100);

        $this->assertEquals([91, 93, 95, 97, 99], $evenOdder->toArray());
    }

    /**
     * @test
     */
    public function can_odd_to_string() : void
    {
        $evenOdder = EvenOdder::odd();

        $this->assertEquals('1 | 3 | 5 | 7 | 9', $evenOdder->toString());
    }

    /**
     * @test
     */
    public function can_odd_cast_to_string() : void
    {
        $evenOdder = EvenOdder::odd();

        $this->assertEquals('1 | 3 | 5 | 7 | 9', (string) $evenOdder);
    }

    /**
     * @test
     */
    public function can_odd_print() : void
    {
        $this->expectOutputString('1 | 3 | 5 | 7 | 9');

        $evenOdder = EvenOdder::odd();
        $evenOdder->print();
    }
}
