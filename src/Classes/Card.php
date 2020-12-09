<?php

namespace Poker\Classes;

class Card
{
    public $value;
    public $suit;

    public function __construct(string $suit, string $value)
    {
        $this->value = $value;
        $this->suit = $suit;
    }

    public function display()
    {
        return $this->value . $this->suit;
    }
}