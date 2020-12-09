<?php

namespace Poker\Classes;

class Deck
{
    private $values = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A'];
    private $suits  = ['C', 'D', 'H', 'S'];

    public $dealt = [];
    public $notDealt = [];

    public function __construct()
    {
        $this->buildDeck();
    }

    public function dealOne()
    {
        $card = array_values($this->notDealt)[0];
        array_shift($this->notDealt);
        $this->dealt[$card->value . $card->suit] = $card;
        return $card;
    }

    public function shuffle()
    {
        return uksort($this->notDealt, function() {
            return rand() > getrandmax() / 2;
        });
    }

    public function display()
    {
        $output = 'Dealt ' . count($this->dealt).': ';
        foreach ($this->dealt as $k=>$v) $output .= $k. ' ';

        $output .= '| Not Dealt ' . count($this->notDealt).': ';
        foreach ($this->notDealt as $k=>$v) $output .= $k. ' ';

        return $output;
    }

    private function buildDeck()
    {
        foreach ($this->suits as $suit) {
            foreach ($this->values as $value) {
                $this->notDealt[$value . $suit] = new Card($suit, $value);
            }
        }
    }
}