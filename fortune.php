<?php
    $month = $_GET["month"];
    $color = $_GET["color"];
    $message = tellFortuneFromColor($color);

      function tellFortuneFromColor($color)
      {
          if ($color == "Red" || $color == "Orange" || $color == "Yellow") {
              return "Your lucky number is 17.";
          }
          elseif ($color == "Green" || $color == "Blue" || $color == "Violet") {
              return "You are a loyal and true friend.";
          }
          else {
              return "I do not know that color.";
          }
      }
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Fortune</title>
</head>
<body>
    <div class="container">
        <h1>Since you were born in <?php echo $month; ?>, you will live forever.</h1>
        <h3>But since your favorite color was <?php echo $color; ?>, I would like you to know that:</h3>
        <h4><italic><?php echo $message; ?></italic></h4>
    </div>
</body>
</html>
