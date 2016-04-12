<?php

namespace sillevl\htmllib;

use sillevl\htmllib\Element;

include_once("Element.php");

class VoidElement extends Element{

    public function __construct($properties = array())
    {
      $this->properties = $properties;
    }

    public function __toString()
    {
      if($this->tag == '') {
        throw new Exception('Element tag is empty.');
      }
      $properties = '';
      foreach ($this->properties as $key => $value) {
        $properties .= "$key=\"$value\" ";
      }
      return "<$this->tag $properties />";
    }
}
