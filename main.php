<?php

require 'Factories/CharacterFactory.php';
require 'Models/Character.php';
require 'Models/Shop.php';
require 'Controller/CharacterController.php';
require 'Views/View.php';

//create Character model using factory with 'warrior', 'mage', 'rogue' professions
$character = CharacterFactory::makeCharacter('warrior');
//instantiate Shop model
$shop = new Shop();
//instantiate the view
$view = new View();
//instantiate a controller and inject the prepared models
$player = new CharacterController($character, $shop, $view);

//test functionality
//$player->showGold();
//$player->showStats();
//$player->showItems();
//$player->managePurchase('warrior');
////after purchase
//$player->showGold();
//$player->showStats();
//$player->showItems();
//$player->visitShop();
//$player->getItemOffers();
