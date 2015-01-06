<?php

class Clientesarray {
  public $items = array();
  public $count = 0;

  

  public function add($value) {
    $this->items[$this->count++] = $value;
  }

}

?>