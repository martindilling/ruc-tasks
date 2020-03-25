<?php
declare(strict_types=1);

namespace Tests;

use RucTasks\Sum;
use PHPUnit\Framework\TestCase;

class SumTest extends TestCase
{
    /**
     * @test
     */
    public function can_calculate_sum() : void
    {
        $sum = new Sum(10, 1);

        $this->assertEquals(55, $sum->calculate());
    }

    /**
     * @test
     */
    public function can_get_sum_as_string() : void
    {
        $sum = new Sum(10, 1);

        $this->assertEquals('55', $sum->toString());
    }

    /**
     * @test
     */
    public function can_cast_sum_to_string() : void
    {
        $sum = new Sum(10, 1);

        $this->assertEquals('55', (string) $sum);
    }
}
