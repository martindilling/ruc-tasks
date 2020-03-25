<?php
declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use RucTasks\MultiplicationTable;

class MultiplicationTableTest extends TestCase
{
    /**
     * @test
     */
    public function zero_table() : void
    {
        $table = new MultiplicationTable(0);

        $this->assertEquals([0, 0, 0, 0, 0, 0, 0, 0, 0, 0], $table->toArray());
    }

    /**
     * @test
     */
    public function one_table() : void
    {
        $table = new MultiplicationTable(1);

        $this->assertEquals([1, 2, 3, 4, 5, 6, 7, 8, 9, 10], $table->toArray());
    }

    /**
     * @test
     */
    public function two_table() : void
    {
        $table = new MultiplicationTable(2);

        $this->assertEquals([2, 4, 6, 8, 10, 12, 14, 16, 18, 20], $table->toArray());
    }

    /**
     * @test
     */
    public function three_table() : void
    {
        $table = new MultiplicationTable(3);

        $this->assertEquals([3, 6, 9, 12, 15, 18, 21, 24, 27, 30], $table->toArray());
    }

    /**
     * @test
     */
    public function seven_table() : void
    {
        $table = new MultiplicationTable(7);

        $this->assertEquals([7, 14, 21, 28, 35, 42, 49, 56, 63, 70], $table->toArray());
    }

    /**
     * @test
     */
    public function negative_two_table() : void
    {
        $table = new MultiplicationTable(-2);

        $this->assertEquals([-2, -4, -6, -8, -10, -12, -14, -16, -18, -20], $table->toArray());
    }

    /**
     * @test
     */
    public function two_table_from_10_to_20() : void
    {
        $table = new MultiplicationTable(2, 11, 20);

        $this->assertEquals([22, 24, 26, 28, 30, 32, 34, 36, 38, 40], $table->toArray());
    }

    /**
     * @test
     */
    public function can_get_table_as_string() : void
    {
        $table = new MultiplicationTable(2);

        $this->assertEquals('2 | 4 | 6 | 8 | 10 | 12 | 14 | 16 | 18 | 20', $table->toString());
    }

    /**
     * @test
     */
    public function can_cast_table_to_string() : void
    {
        $table = new MultiplicationTable(2);

        $this->assertEquals('2 | 4 | 6 | 8 | 10 | 12 | 14 | 16 | 18 | 20', (string) $table);
    }

    /**
     * @test
     */
    public function can_print_the_table_as_a_string() : void
    {
        $this->expectOutputString('2 | 4 | 6 | 8 | 10 | 12 | 14 | 16 | 18 | 20');

        $table = new MultiplicationTable(2);
        $table->print();
    }

    /**
     * @test
     */
    public function fails_if_not_integer() : void
    {
        $this->expectException(\TypeError::class);
        $this->expectExceptionMessageMatches('/must be of the type int/');

        $table = new MultiplicationTable('fail');
    }
}

