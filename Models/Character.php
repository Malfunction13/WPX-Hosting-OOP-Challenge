<?php


class Character {
    private string $profession;
    private array $stats;
    private int $gold;
    private array $items;

    function __construct(string $profession, array $stats, int $gold = 2) {
        $this->profession = $profession;
        $this->gold = $gold;
        $this->items = [];
        $this->stats = $stats;
    }

    function getProfession() {
        return $this->profession;
    }

    function getStats() {
        return $this->stats;
    }

    function setStats(array $stats) {
        foreach ($stats as $stat => $value) {
            $this->stats[$stat] += $value;
        }
    }

    function getItems() {
        return $this->items;
    }

    function addItem(string $itemName, array $itemDescr) {
        $this->items[$itemName] = $itemDescr;
    }

    function getGold() {
        return $this->gold;
    }

    function setGold(int $amount, string $operation) {
        if ($operation === 'add') {
            $this->gold += $amount;
        } elseif ($operation === 'remove')
            $this->gold -= $amount;
    }


}