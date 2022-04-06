<?php
  $color = $_POST['color'];
  $sport = $_POST['sport'];
?>

<!doctype html>
<html lang="ko">
  <head>
  <meta charset="utf-8">
    <title>HTML</title>
    <style>
      * {
        font-size: 16px;
        font-family: Consolas, sans-serif;
      }
    </style>
  </head>
  <body>
    <p>Color is <?php echo $color ?>.</p>
    <p>Sport is <?php echo $sport ?>.</p>
  </body>
</html>