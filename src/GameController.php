<?php

namespace Poker;

use Poker\Classes\Card;
use Poker\Classes\Deck;
use Poker\Classes\Hand;
use Poker\Utilities\Console;

class GameController
{
    private $hands;

    private $verbose;

    /**
     * GameController constructor.
     * @param int $players
     * @param false $verbose
     */
    public function __construct(int $players, $verbose = false)
    {
        $this->hands = array_fill(0, $players, null);

        $this->verbose = $verbose;
    }

    /**
     *
     */
    public function run()
    {
        if ($this->verbose) Console::info('Deck built');

        $deck = new Deck();

        if ($this->verbose) Console::info('Deck state: ' . $deck->display());

        $deck->shuffle();

        if ($this->verbose) Console::info('Deck shuffled');
        if ($this->verbose) Console::info('Deck state: ' . $deck->display());

        foreach ($this->hands as $key => $hand) {
            $this->hands[$key] = new Hand();
            foreach (range(1,5) as $round) {
                $card = $deck->dealOne();
                $this->hands[$key]->deal(new Card(
                    $card->suit, $card->value
                ));

                Console::info('Player ' . $key . ' dealt ' . $card->display());
            }
        }

        if ($this->verbose) Console::info('Deck state: ' . $deck->display());

        foreach ($this->hands as $key=>$hand) {

            $has = 'nothing';

            if ($hand->hasStraight(true)) {
                $has = 'a straight flush';
            } else if ($hand->hasStraight(false)) {
                $has = 'a straight';
            }

            Console::info('Player ' . $key . ' has ' . $has);
        }
    }
}