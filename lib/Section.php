<?php

require_once("Element.php");

class Section extends Element
{
  public function __construct($content)
  {
    // hello
    parent::__construct($content);
    $this->tag = "section";
  }
}
