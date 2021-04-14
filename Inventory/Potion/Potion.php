<?php

namespace Inventory\Potion;

use Inventory\Item;
use Personna\TypeOf\Player;

class Potion extends Item
{
    public function __construct()
    {
        parent::__construct('Potion');
    }

    /**
     * L'action à faire quand le personnage utilise
     * la potion
     */
    public function use(Player $target)
    {
        $target->addHealth(20);
    }
}

