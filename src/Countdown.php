<?php
declare(strict_types=1);

namespace RucTasks;

/**
 * Count down from a number to a number with a given step between decrements.
 */
class Countdown
{
    private int $from;
    private int $to;
    private int $step;

    public function __construct(int $from, int $to, int $step = 1)
    {
        $this->from = $from;
        $this->to = $to;
        $this->step = $step;
    }

    public function toArray() : array
    {
        $range = [];
        for (
            $i = $this->from;
            $i >= $this->to;
            $i -= $this->step
        ) {
            $range[] = $i;
        }

        return $range;
    }

    public function toString() : string
    {
        return implode(' | ', $this->toArray());
    }

    public function __toString() : string
    {
        return $this->toString();
    }
}
