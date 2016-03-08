<?php

require_once("Element.php");

class Form extends Element
{
  public function __construct($content)
  {
    parent::__construct($content);
    $this->tag = "form";
  }
}
