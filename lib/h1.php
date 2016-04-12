<?php

namespace sillevl\htmllib;

use sillevl\htmllib\Element;

class H1 extends Element
{
  public function __construct($content)
  {
    parent::__construct($content);
    $this->tag = "h1";
  }
}
