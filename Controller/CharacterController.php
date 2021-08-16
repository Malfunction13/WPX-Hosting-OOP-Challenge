<?php


class CharacterController {
    private Character $character;
    private Shop $shop;
    private View $view;

    function __construct(Character $character, Shop $shop, View $view) {
        $this->character = $character;
        $this->shop = $shop;
        $this->view = $view;
    }

    function showStats() {
        $this->view->printStats($this->character->getStats());
    }

    function showItems() {
        $this->view->printItems($this->character->getItems());
    }

    function showGold() {
        $this->view->printGold($this->character->getGold());
    }

    function visitShop() {
        $this->view->printShopItems($this->shop->getItems());
    }

    function getItemOffers() {
        $this->view->printShopOffers($this->shop->offerItems($this->character->getProfession()));
    }

    function managePurchase(string $itemName) {
        if (array_key_exists($itemName, $this->shop->getItems())) {
            $itemDescr = $this->shop->getItem($itemName);
            $this->buyItem($itemName, $itemDescr);
            $this->modifystats($itemDescr);
        } else {
           $this->view->itemNotFound();
        }

    }

    function buyItem(string $itemName, $itemDescr) {
        if ($this->character->getGold() >= $itemDescr['price']) {
            $this->character->setGold($itemDescr['price'], 'remove');
            $this->character->addItem($itemName, $itemDescr);
        }
    }

    function modifyStats($itemDescr) {
        $stats = $this->filterStats($itemDescr);
        $this->character->setStats($stats);
    }

    //get rid of non-stat related info of the item
    function filterStats($itemDescr){
        return array_filter($itemDescr, fn ($stat) => !in_array($stat, ['price', 'type']), ARRAY_FILTER_USE_KEY);
    }
}