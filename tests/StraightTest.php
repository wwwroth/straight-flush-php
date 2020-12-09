<?php

use PHPUnit\Framework\TestCase;

final class StraightTest extends TestCase
{
    public function testHasStraight()
    {
        $cards = [
            ['suit' => 'S', 'value' => '2'],
            ['suit' => 'C', 'value' => '3'],
            ['suit' => 'S', 'value' => '4'],
            ['suit' => 'C', 'value' => '5'],
            ['suit' => 'S', 'value' => '6'],
        ];

        $hand = new \Poker\Classes\Hand();

        foreach ($cards as $card) {
            $hand->deal(new \Poker\Classes\Card($card['suit'], $card['value']));
        }

        $this->assertTrue($hand->hasStraight(false));
    }

    public function testHasStraightWithFaceCards()
    {
        $cards = [
            ['suit' => 'S', 'value' => '7'],
            ['suit' => 'C', 'value' => '8'],
            ['suit' => 'S', 'value' => '9'],
            ['suit' => 'C', 'value' => '10'],
            ['suit' => 'S', 'value' => 'J'],
        ];

        $hand = new \Poker\Classes\Hand();

        foreach ($cards as $card) {
            $hand->deal(new \Poker\Classes\Card($card['suit'], $card['value']));
        }

        $this->assertTrue($hand->hasStraight(false));

    }

    public function testDoesntHaveStraight()
    {
        $cards = [
            ['suit' => 'S', 'value' => '2'],
            ['suit' => 'C', 'value' => '4'],
            ['suit' => 'H', 'value' => '9'],
            ['suit' => 'S', 'value' => '7'],
            ['suit' => 'C', 'value' => '10'],
        ];

        $hand = new \Poker\Classes\Hand();

        foreach ($cards as $card) {
            $hand->deal(new \Poker\Classes\Card($card['suit'], $card['value']));
        }

        $this->assertFalse($hand->hasStraight(false));
    }

    public function testDoesntHaveStraightWithFaceCards()
    {
        $cards = [
            ['suit' => 'S', 'value' => '2'],
            ['suit' => 'C', 'value' => '4'],
            ['suit' => 'H', 'value' => '9'],
            ['suit' => 'S', 'value' => '7'],
            ['suit' => 'C', 'value' => '10'],
        ];

        $hand = new \Poker\Classes\Hand();

        foreach ($cards as $card) {
            $hand->deal(new \Poker\Classes\Card($card['suit'], $card['value']));
        }

        $this->assertFalse($hand->hasStraight(false));
    }
}
