<?php


class View {
    function printStats(array $stats) {
        echo "Printing character stats!", PHP_EOL;
        foreach ($stats as $stat => $value) {
            echo strtoupper($stat)," is {$value}", PHP_EOL;
        }
    }
    function printItems(array $items) {
        if (count($items) > 0) {
            echo "Printing character items! Total ", count($items), " items.", PHP_EOL;
            foreach ($items as $name => $descr) {
                echo "Item '{$name}' stats:", PHP_EOL;
                foreach ($descr as $stat => $value) {
                    echo ucfirst($stat),": {$value}", PHP_EOL;
                }
                echo PHP_EOL;
            }
        } else {
            echo "Inventory is empty, go farm some gold!", PHP_EOL;
        }

    }

    function printGold(int $gold) {
        echo "Printing character gold!", PHP_EOL;
        echo "You have {$gold} gold in your inventory.", PHP_EOL;
    }

    function printShopItems(array $items) {
        echo "Character has entered the shop:", PHP_EOL;
        foreach ($items as $name => $descr) {
            echo "Item '{$name}'", PHP_EOL;
            foreach ($descr as $stat => $value) {
                echo ucfirst($stat),": {$value}", PHP_EOL;
            }
            echo PHP_EOL;
        }
    }

    function printShopOffers(array $offers) {
        echo "Printing offers for your character class!", PHP_EOL;
        foreach ($offers as $name => $descr) {
            echo "Item '{$name}'", PHP_EOL;
            foreach ($descr as $stat => $value) {
                echo ucfirst($stat),": {$value}", PHP_EOL;
            }
            echo PHP_EOL;
        }
    }

    function itemNotFound(){
        echo "Error, item not found in the shop!", PHP_EOL;
    }
}