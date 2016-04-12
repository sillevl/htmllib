<?php

namespace sillevl\htmllib;

use sillevl\htmllib\Element;

class Button extends Element
{
  public function __construct($content, $properties = array())
  {
    parent::__construct($content, $properties);
    $this->tag = "button";
  }
}
