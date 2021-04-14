<?php

namespace Personna\TypeOf;


class Hunter extends Player implements Displayable {

    public function rangeAttack($target)
    {
        $target->life -= $this->atk * 3;
        return $this->displayAttackInfo($target);
    }

    public function getImage()
    {
        return 'images/Barret.png';
    }

}