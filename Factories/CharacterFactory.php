<?php


class CharacterFactory {
    private static array $stats = [
        'warrior' => [
            'hp' => 7,
            'mp' => 2,
            'str' => 6,
            'ap' => 1,
            'ag' => 3,
        ],
        'mage' => [
            'hp' => 3,
            'mp' => 7,
            'str' => 1,
            'ap' => 7,
            'ag' => 2,
        ],
        'rogue' =>  [
            'hp' => 5,
            'mp' => 4,
            'str' => 3,
            'ap' => 3,
            'ag' => 7,
        ],
        ];

    static function makeCharacter (string $profession) {
        return new Character($profession, CharacterFactory::$stats[$profession]);
    }

}