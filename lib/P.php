<?php

namespace sillevl\htmllib;

use sillevl\htmllib\Element;

class P extends Element
{
  public function __construct($content)
  {
    parent::__construct($content);
    $this->tag = "p";
  }
}
