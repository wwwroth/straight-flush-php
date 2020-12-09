# Poker Assignment

### Running the Poker simulation

First, install dependencies by running `composer install` in the project root.

Then in the app root, run `php bin/console.php`

##### Arguments
* --players=N | How many players should be dealt between 2 and 6. Default is 5.
* --verbose=1|0 | Verbose cmd output to display deck status as it's shuffled.

```
➜ php bin/console.php --players=4
[2020-12-09 10:12:24] [INFO] Player 0 dealt 2H
[2020-12-09 10:12:24] [INFO] Player 0 dealt 5S
[2020-12-09 10:12:24] [INFO] Player 0 dealt 3C
[2020-12-09 10:12:24] [INFO] Player 0 dealt 5C
[2020-12-09 10:12:24] [INFO] Player 0 dealt 9H
[2020-12-09 10:12:24] [INFO] Player 1 dealt 10D
[2020-12-09 10:12:24] [INFO] Player 1 dealt 10C
[2020-12-09 10:12:24] [INFO] Player 1 dealt 8S
[2020-12-09 10:12:24] [INFO] Player 1 dealt 6D
[2020-12-09 10:12:24] [INFO] Player 1 dealt 9C
[2020-12-09 10:12:24] [INFO] Player 2 dealt QH
[2020-12-09 10:12:24] [INFO] Player 2 dealt QD
[2020-12-09 10:12:24] [INFO] Player 2 dealt AC
[2020-12-09 10:12:24] [INFO] Player 2 dealt JD
[2020-12-09 10:12:24] [INFO] Player 2 dealt 3D
[2020-12-09 10:12:24] [INFO] Player 3 dealt 3H
[2020-12-09 10:12:24] [INFO] Player 3 dealt 8H
[2020-12-09 10:12:24] [INFO] Player 3 dealt 9D
[2020-12-09 10:12:24] [INFO] Player 3 dealt 9S
[2020-12-09 10:12:24] [INFO] Player 3 dealt 10S
[2020-12-09 10:12:24] [INFO] Player 0 has nothing
[2020-12-09 10:12:24] [INFO] Player 1 has nothing
[2020-12-09 10:12:24] [INFO] Player 2 has nothing
[2020-12-09 10:12:24] [INFO] Player 3 has nothing
```

```
➜ php bin/console.php --players=2 --verbose=1
[2020-12-09 10:12:49] [INFO] Deck built
[2020-12-09 10:12:49] [INFO] Deck state: Dealt 0: | Not Dealt 52: 2C 3C 4C 5C 6C 7C 8C 9C 10C JC QC KC AC 2D 3D 4D 5D 6D 7D 8D 9D 10D JD QD KD AD 2H 3H 4H 5H 6H 7H 8H 9H 10H JH QH KH AH 2S 3S 4S 5S 6S 7S 8S 9S 10S JS QS KS AS
[2020-12-09 10:12:49] [INFO] Deck shuffled
[2020-12-09 10:12:49] [INFO] Deck state: Dealt 0: | Not Dealt 52: JS 9H AD 8D AC 5D 6D KS JC KD 9S 3D 4S 2D 7H 3S QC 9C 7D 10S 2S 9D AH 4C 3C QD QS 2H 2C 5H 5C 6H 8H 6C JD 6S 3H 10C JH QH 4D 7C 5S KC KH 10D 7S 10H 8S 8C 4H AS
[2020-12-09 10:12:49] [INFO] Player 0 dealt JS
[2020-12-09 10:12:49] [INFO] Player 0 dealt 9H
[2020-12-09 10:12:49] [INFO] Player 0 dealt AD
[2020-12-09 10:12:49] [INFO] Player 0 dealt 8D
[2020-12-09 10:12:49] [INFO] Player 0 dealt AC
[2020-12-09 10:12:49] [INFO] Player 1 dealt 5D
[2020-12-09 10:12:49] [INFO] Player 1 dealt 6D
[2020-12-09 10:12:49] [INFO] Player 1 dealt KS
[2020-12-09 10:12:49] [INFO] Player 1 dealt JC
[2020-12-09 10:12:49] [INFO] Player 1 dealt KD
[2020-12-09 10:12:49] [INFO] Deck state: Dealt 10: JS 9H AD 8D AC 5D 6D KS JC KD | Not Dealt 42: 9S 3D 4S 2D 7H 3S QC 9C 7D 10S 2S 9D AH 4C 3C QD QS 2H 2C 5H 5C 6H 8H 6C JD 6S 3H 10C JH QH 4D 7C 5S KC KH 10D 7S 10H 8S 8C 4H AS
[2020-12-09 10:12:49] [INFO] Player 0 has nothing
[2020-12-09 10:12:49] [INFO] Player 1 has nothing
```

### Testing
`./vendor/bin/phpunit tests`
