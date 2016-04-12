<?php

namespace sillevl\htmllib;

use sillevl\htmllib\VoidElement;

include_once("VoidElement.php");

class Input extends VoidElement{

  private $name;
  private $type;

  public function __construct($name, $type, $properties = array())
  {
    $properties["name"] = $name;
    $properties["type"] = $type;
    parent::__construct($properties);
    $this->tag = "input";
  }
}
