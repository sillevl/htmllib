<?php

namespace sillevl\htmllib;

use sillevl\htmllib\{H2,Input,Form};

class LoginForm
{
  private $title;
  private $inputs = array();
  private $submit;

  public function __construct($title, $inputs = array())
  {
    $this->title = $title;
    $this->inputs = $inputs;
  }

  public function __toString()
  {
    $content = "";
    $content .= new H2($this->title);
    foreach ($this->inputs as $input) {
      $content .= (string) new Input($input["name"], $input["type"]);
    }
    return (string) new Form($content);
  }

}
