<?php
    require __DIR__ . '/vendor/autoload.php';


  use sillevl\htmllib\{H1,H2,P,Div,Button,Header,Nav,Section,LoginForm};
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
