<?php

namespace sillevl\htmllib;

use sillevl\htmllib\Element;

require_once("Element.php");

class H1 extends Element
{
  public function __construct($content)
  {
    parent::__construct($content);
    $this->tag = "h1";
  }
}
