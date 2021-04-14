<?php

namespace Personna\TypeOf;



class Player {

    public $name;
    public $life = 100;
    public $atk = 10;
    public $mana = 10;
    public $inventory = [];
    private $level = 1;
    private $experience = 0;

    public function __construct($name)
    {
       return $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function getHealth()
    {
        return $this->life;
    }
    public function getStrength()
    {
        return $this->atk;
    }
    public function getMana()
    {
        return $this->mana;
    }


    // Pick Items function

    public function pick($item)
    {
        $this->inventory[] = $item;
        return $this;
    }
    
    // afficher l'inventaire 

    public function getInventory() {
        $html = '<ul>';
        foreach ($this->inventory as $item) {
            $html .= '<li>'.$item->getName().'<li>';
        }
        $html .= '</ul>';
        return $html;
    }

   

    public function addHealth($life)
    {
        $this->life += $life;
    }
    public function addStrength($atk)
    {
        $this->atk += $atk;
    }

    public function consume($item)
    {
        $item->use($this);
    }

    public function equip($item) {
        if ($item->supports($this)) {
            $item->use($this);
        }
    }

    public function attack ($target) 
    {
        $target->life -= $this->atk * 2;
        
        return $this->displayAttackInfo($target);
    }

    protected function displayAttackInfo($target) {

        if ($target->life <= 0) {
            $target->life = 0;

            $this->experience++;
            if ($this->experience % 3 === 0) {
                // Dès qu'on atteint 3, 6, 9 point d'XP
                // On pass au niveau suivant
                $this->level++;
            }

            return $target->name . ' est mort. <br />';
        }

        return $this->name. ' atttaque '.$target->name. '. <br />'
        .$target->name. ' a maintenant '.$target->life. ' point de vie <br />';
    }

    public function getLevel() {
        return $this->level;
    }
    public function getExp()
    {
        return $this->experience;
    }

}

?>
