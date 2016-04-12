<?php
  require_once('lib/H1.php');
  require_once('lib/H2.php');
  require_once('lib/P.php');
  require_once('lib/Div.php');
  require_once('lib/Button.php');
  require_once('lib/header.php');
  require_once('lib/Nav.php');
  require_once('lib/Section.php');
  require_once('lib/LoginForm.php');

  use sillevl\htmllib\{H1,H2,P,Div,Button,header,Nav,Section,LoginForm};
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>HTML-lib</title>
  </head>
  <body>
    <?php
      echo new Header(new P('Wauw, wat een prachtig voorbeeld van een header, wauw. Goed gewerkt Milan Lamote!'));
      echo new H1("HTML Lib demo");
      echo new H2("Welcome");
      echo new P('Welcome to my html-lib.');
      echo new Div(new P('Hello world.'));
      echo new Button('Test', ["type"=>"button", "name"=>"button"]);
      echo new Nav(new P('Ik ben een nav element!'));
      echo new Section(new P("I am a section !!! wheee"));

      echo new LoginForm("Log me in:", [
        ["name" => "username", "type" => "text"],
        ["name" => "password", "type" => "password"],
        ["name" => "submit", "type" => "submit"]
      ]);
    ?>
  </body>
</html>
