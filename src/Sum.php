<?php
declare(strict_types=1);

namespace RucTasks;

/**
 * Sums up numbers between two numbers.
 */
class Sum
{
    private int $x;
    private int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function calculate() : int
    {
        return array_sum(range($this->x, $this->y));
    }

    public function toString() : string
    {
        return (string) $this->calculate();
    }

    public function __toString() : string
    {
        return $this->toString();
    }
}
