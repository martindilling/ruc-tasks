<?php
declare(strict_types=1);

namespace Tests;

use RucTasks\Deck;
use PHPUnit\Framework\TestCase;

class DeckTest extends TestCase
{
    /**
     * @test
     */
    public function deck_has_52_cards()
    {
        $deck = new Deck();

        $this->assertCount(52, $deck);
    }

    /**
     * @test
     */
    public function drawing_card_removes_card_from_deck()
    {
        $deck = new Deck();
        $deck->draw();

        $this->assertCount(51, $deck);
    }

    /**
     * @test
     */
    public function can_draw_multiple_cards_at_once()
    {
        $deck = new Deck();
        $deck->draw(2);

        $this->assertCount(50, $deck);
    }

    /**
     * @test
     */
    public function cards_generating_in_order()
    {
        $deck = new Deck();
        $card = $deck->draw()[0];

        $this->assertEquals('clubs', $card->suit());
        $this->assertEquals('ace', $card->rank());
    }

    /**
     * @test
     * @todo There is a chance this test would fail, as the shuffling could result in the same card on top.
     *       Maybe wrap this in a retry, the risk of it happening 2 or 3 times in a row should be low enough.
     */
    public function can_shuffle_deck()
    {
        $deck = new Deck();
        $deck->shuffle();
        $card = $deck->draw()[0];

        $this->assertNotEquals('ace of clubs', (string) $card);
    }
}
