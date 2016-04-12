<?php

namespace sillevl\htmllib;

use sillevl\htmllib\Element;

class Header extends Element
{
  public function __construct($content)
  {
    parent::__construct($content);
    $this->tag = "header";
  }
}
