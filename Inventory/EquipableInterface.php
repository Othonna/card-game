<?php

namespace Inventory;
namespace Inventory\Potion;
namespace Inventory\Weapons;

use Personna\TypeOf\Player;

interface EquipableInterface {
    public function use(Player $player);
    public function supports(Player $player);
}