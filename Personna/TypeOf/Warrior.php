<?php

namespace Personna\TypeOf;


class Warrior extends Player {

  public function __construct($name)
  {
    parent::__construct($name);
    $this->atk *= 2;
  }
    
  public function getImage() {
    return 'images/Cloud.png';
  }
}

?>