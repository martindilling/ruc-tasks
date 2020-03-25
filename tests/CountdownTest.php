<?php
declare(strict_types=1);

namespace Tests;

use RucTasks\Countdown;
use PHPUnit\Framework\TestCase;

class CountdownTest extends TestCase
{
    /**
     * @test
     */
    public function nothing_to_count() : void
    {
        $countdown = new Countdown(10, 10);

        $this->assertEquals([10], $countdown->toArray());
    }

    /**
     * @test
     */
    public function countdown_step_one() : void
    {
        $countdown = new Countdown(5, 1);

        $this->assertEquals([5, 4, 3, 2, 1], $countdown->toArray());
    }

    /**
     * @test
     */
    public function countdown_step_2() : void
    {
        $countdown = new Countdown(5, 1, 2);

        $this->assertEquals([5, 3, 1], $countdown->toArray());
    }

    /**
     * @test
     */
    public function countdown_step_11() : void
    {
        $countdown = new Countdown(500, 450, 11);

        $this->assertEquals([500, 489, 478, 467, 456], $countdown->toArray());
    }

    /**
     * @test
     */
    public function trying_to_count_up_results_in_empty_list() : void
    {
        $countdown = new Countdown(1, 5, 2);

        $this->assertEquals([], $countdown->toArray());
    }

    /**
     * @test
     */
    public function countdown_as_string() : void
    {
        $countdown = new Countdown(5, 1, 2);

        $this->assertEquals('5 | 3 | 1', $countdown->toString());
    }

    /**
     * @test
     */
    public function cast_countdown_to_string() : void
    {
        $countdown = new Countdown(5, 1, 2);

        $this->assertEquals('5 | 3 | 1', (string) $countdown);
    }
}
