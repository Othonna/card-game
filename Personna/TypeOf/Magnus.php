<?php

namespace Personna\TypeOf;


class Magnus extends Player{

    public function __construct($name)
    {
        parent::__construct($name);
        $this->mana *= 2;
    }

    public function catSpell($target)
    {
        $target->life -= $this->mana * 3;
    }

    public function getImage()
    {
        return 'images/Aerith.png';
    }
}



?>