<?php

require_once("h1.php");

class H2 extends H1
{
  public function __construct($content)
  {
    $this->content = $content;
    $this->tag = "h2";
  }
}
