<?php


class Shop {
    private array $items;

    //deviation from requirement - extra stat 'type' for easy filtering and adding new types
    function __construct() {
        $this->items = [
            'Staff' => ['hp' => 5, 'mp' => 15, 'str' => 5, 'ap' => 17, 'ag' => 3, 'type' => 'mage', 'price' => 1],
            'Sword' => ['hp' => 15, 'mp' => 0, 'str' => 20, 'ap' => 0, 'ag' => 4, 'type' => 'warrior', 'price' => 1],
            'Dagger' => ['hp' => 5, 'mp' => 7, 'str' => 10, 'ap' => 0, 'ag' => 7, 'type' => 'rogue', 'price' => 1],
        ];
    }

    function getItems() {
        return $this->items;
    }

    function getItem($itemName) {
        return $this->items[$itemName];
    }

    function offerItems($profession) {
        $relatedItems = [];
        foreach ($this->items as $item => $description) {
            if ($description['type'] === $profession) {
                $relatedItems[$item] = $description;
            }
        }
        return $relatedItems;
    }
}