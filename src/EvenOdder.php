<?php
declare(strict_types=1);

namespace RucTasks;

/**
 * Find all even or odd numbers within a given range.
 */
class EvenOdder
{
    private bool $isEven;
    private int $from;
    private int $to;

    /**
     * Private to avoid consumer code to be confusing.
     * Use constructor functions:
     * @see EvenOdder::even()
     * @see EvenOdder::odd()
     */
    private function __construct(bool $isEven, int $from = 1, int $to = 10)
    {
        $this->isEven = $isEven;
        $this->from = $from;
        $this->to = $to;
    }

    public static function even(int $from = 1, int $to = 10) : EvenOdder
    {
        return new static(true, $from, $to);
    }

    public static function odd(int $from = 1, int $to = 10) : EvenOdder
    {
        return new static(false, $from, $to);
    }

    private function shouldKeepNumber(int $number) : bool
    {
        return (bool) ($this->isEven
            ? !($number % 2)
            : $number % 2
        );
    }

    public function toArray() : array
    {
        return array_values(
            array_filter(
                range($this->from, $this->to),
                fn($n) => $this->shouldKeepNumber($n),
            )
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
