<?php

use Poker\GameController;
use Poker\Utilities\Console;

require __DIR__.'/../vendor/autoload.php';

// Set command defaults
$players = 5;
$verbose = 0;

foreach ($_SERVER['argv'] as $argument) {

    /*
     * Determine how many players are playing.
     * Default to 5 unless command line overwrite via --players=N flag.
     */
    if (strpos($argument, '--players=') !== false) {
        $players = (int) explode('--players=', $argument)[1];
    }

    /*
     * Check for verbose output flag.
     */
    if (strpos($argument, '--verbose=') !== false) {
        $verbose = (int) explode('--verbose=', $argument)[1];
    }
}


if ($players < 2 || $players > 7) {
    Console::error('Game must have between 2 and 7 players.', true);
}

$gameController = new GameController($players, $verbose);
$gameController->run();