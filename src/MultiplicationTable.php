<?php
declare(strict_types=1);

namespace RucTasks;

/**
 * Make multiplication tables for any number.
 * Can also optionally make the table in a given range of multiplications.
 */
class MultiplicationTable
{
    private int $number;
    private int $from;
    private int $to;

    public function __construct(int $number, int $from = 1, int $to = 10)
    {
        $this->number = $number;
        $this->from = $from;
        $this->to = $to;
    }

    public function toArray() : array
    {
        return array_map(
            fn($n) => $n * $this->number,
            range($this->from, $this->to),
        );
    }

    public function toString() : string
    {
        return implode(' | ', $this->toArray());
    }

    public function __toString() : string
    {
        return $this->toString();
    }

    /**
     * @todo Should probably not echo directly to the output buffer.
     */
    public function print() : void
    {
        echo $this->toString();
    }
}
