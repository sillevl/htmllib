<?php
  require_once('lib/h1.php');
  require_once('lib/h2.php');
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>HTML-lib</title>
  </head>
  <body>
    <?php
      $title = new H1("HTML Lib demo");
      echo $title;

      echo new H2("Welcome");
    ?>
    <p>
      Welcome to my html-lib.
    </p>
    <button type="button" name="button">Test</button>
  </body>
</html>
