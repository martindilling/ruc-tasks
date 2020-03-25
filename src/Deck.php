<?php
declare(strict_types=1);

namespace RucTasks;

/**
 * Representing a standard desk of cards.
 */
class Deck implements \Countable
{
    private array $cards;

    public function __construct()
    {
        $this->cards = $this->generateDeck();
    }

    private function generateDeck() : array
    {
        $cards = [];
        foreach (Card::SUITS as $suit) {
            foreach (Card::RANKS as $rank) {
                $cards[] = new Card($suit, $rank);
            }
        }

        return $cards;
    }

    public function count()
    {
        return count($this->cards);
    }

    /**
     * @return Card[]
     */
    public function draw(int $count = 1) : array
    {
        return array_splice($this->cards, 0, $count);
    }

    public function shuffle() : void
    {
        shuffle($this->cards);
    }
}
