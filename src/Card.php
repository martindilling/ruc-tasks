<?php
declare(strict_types=1);

namespace RucTasks;

/**
 * Simple value object for a playing card.
 * Being used by {@see \RucTasks\Deck}
 */
class Card
{
    private string $suit;
    private string $rank;

    public const SUITS = ['clubs', 'diamonds', 'hearts', 'spades'];
    public const RANKS = ['ace', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'jack', 'queen', 'king'];

    public function __construct(string $suit, string $rank)
    {
        if (!in_array($suit, self::SUITS)) {
            throw new \InvalidArgumentException('Invalid suit: ' . $suit);
        }

        if (!in_array($rank, self::RANKS)) {
            throw new \InvalidArgumentException('Invalid rank: ' . $rank);
        }

        $this->suit = $suit;
        $this->rank = $rank;
    }

    public function suit() : string
    {
        return $this->suit;
    }

    public function rank() : string
    {
        return $this->rank;
    }

    public function __toString() : string
    {
        return "{$this->rank} of {$this->suit}";
    }
}
