<?php

namespace Inventory\Weapons;

use Inventory\Item;
use Personna\TypeOf\Player;
use Personna\TypeOf\Warrior;

class Sword extends Item 
{
    public $strength;

    public function __construct($name, $strength)
    {
        parent::__construct($name);
        $this->strength = $strength;
    }

    public function use(Player $player) {
        $player->addStrength($this->strength);
    }



    // renvoie true seulement si le personnage est un guerrier
    // permets de dire que l'épée n'est que pour le guerrier
    public function supports(Player $player) {
        return $player instanceof Warrior;
    }
}