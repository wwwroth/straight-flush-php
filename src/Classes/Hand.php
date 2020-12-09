<?php

namespace Poker\Classes;

class Hand
{
    private $cards = [];

    private $faceCardDefs = [
        'J' => 11,
        'Q' => 12,
        'K' => 13,
        'A' => 14,
    ];

    public function deal(Card $card)
    {
        $this->cards[] = $card;
    }

    public function hasStraight($samesuit)
    {
        $values = [];
        foreach ($this->cards as $card) {
            if (array_key_exists($card->value, $this->faceCardDefs)) {
                $values[] = $this->faceCardDefs[$card->value];
            } else {
                $values[] = (int) $card->value;
            }
        }

        sort($values);

        $straight = true;
        $first = true;
        $lastValue = null;

        foreach ($values as $value) {
            $current = $value;

            if ($first) {
                $lastValue = $value;
                $first = false;
                continue;
            }

            if ($current-1 == $lastValue) {
                $lastValue = $value;
                continue;
            } else {
                $straight = false;
                break;
            }
        }

        // If no straight, don't even check for flush
        if (!$straight) return false;

        // If we dont care about flushes, return if we have a straight;
        if (!$samesuit) return true;

        $suits = [];
        foreach ($this->cards as $card) {
           $suits[] = $card->suit;
        }

        if (count(array_count_values($suits)) == 1) {
            $samesuit = true;
        } else {
            $samesuit = false;
        }

        if ($samesuit === $straight) return true;
        return false;
    }
}