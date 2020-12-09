<?php

use PHPUnit\Framework\TestCase;

final class StraightFlushTest extends TestCase
{
    public function testHasStraightFlush()
    {
        $cards = [
            ['suit' => 'S', 'value' => '2'],
            ['suit' => 'S', 'value' => '3'],
            ['suit' => 'S', 'value' => '4'],
            ['suit' => 'S', 'value' => '5'],
            ['suit' => 'S', 'value' => '6'],
        ];

        $hand = new \Poker\Classes\Hand();

        foreach ($cards as $card) {
            $hand->deal(new \Poker\Classes\Card($card['suit'], $card['value']));
        }

        $this->assertTrue($hand->hasStraight(true));
    }

    public function testHasStraightFlushWithFaceCards()
    {
        $cards = [
            ['suit' => 'S', 'value' => '7'],
            ['suit' => 'S', 'value' => '8'],
            ['suit' => 'S', 'value' => '9'],
            ['suit' => 'S', 'value' => '10'],
            ['suit' => 'S', 'value' => 'J'],
        ];

        $hand = new \Poker\Classes\Hand();

        foreach ($cards as $card) {
            $hand->deal(new \Poker\Classes\Card($card['suit'], $card['value']));
        }

        $this->assertTrue($hand->hasStraight(true));
    }

    public function testDoesntHaveStraightFlush()
    {
        $cards = [
            ['suit' => 'S', 'value' => '2'],
            ['suit' => 'C', 'value' => '4'],
            ['suit' => 'H', 'value' => '6'],
            ['suit' => 'S', 'value' => '7'],
            ['suit' => 'C', 'value' => '8'],
        ];

        $hand = new \Poker\Classes\Hand();

        foreach ($cards as $card) {
            $hand->deal(new \Poker\Classes\Card($card['suit'], $card['value']));
        }

        $this->assertFalse($hand->hasStraight(true));
    }

    public function testDoesntHaveStraightFlushWithFaceCards()
    {
        $cards = [
            ['suit' => 'S', 'value' => '2'],
            ['suit' => 'C', 'value' => '4'],
            ['suit' => 'H', 'value' => '6'],
            ['suit' => 'S', 'value' => 'K'],
            ['suit' => 'C', 'value' => 'A'],
        ];

        $hand = new \Poker\Classes\Hand();

        foreach ($cards as $card) {
            $hand->deal(new \Poker\Classes\Card($card['suit'], $card['value']));
        }

        $this->assertFalse($hand->hasStraight(true));
    }
}
