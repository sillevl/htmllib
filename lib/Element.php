<?php

class Element
{
  protected $content = '';
  protected $tag = '';

  public function __construct($content)
  {
    $this->content = $content;
  }

  public function __toString()
  {
    if($this->tag == '') {
      throw new Exception('Element tag is empty.');
    }
    return "<$this->tag>$this->content</$this->tag>";
  }
}
