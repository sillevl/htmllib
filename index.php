<?php
  require_once('lib/H1.php');
  require_once('lib/H2.php');
  require_once('lib/P.php');
  require_once('lib/Div.php');
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>HTML-lib</title>
  </head>
  <body>
    <?php
      echo new H1("HTML Lib demo");
      echo new H2("Welcome");
      echo new P('Welcome to my html-lib.');

      echo new Div(new P('Hello world.'));
    ?>
    <div>
      <p>
        Hello world.
      </p>
    </div>
    <button type="button" name="button">Test</button>
  </body>
</html>
