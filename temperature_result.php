<?php
    $temperature = $_GET["temperature"];
    $message = tempMessage($temperature);

    function tempMessage($temperature)
    {
        if ($temperature < 60) {
            return "It's cold out!";
        }
        else if ($temperature > 80) {
            return "It's too hot!";
        }
        else {
            return "It's lovely out!";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Message</title>
</head>
<body>
    <div class="container">
        <h1><?php echo $message; ?></h1>
        <h3><?php echo "You said it was: " . $temperature . " degrees F out"; ?> </h3>
    </div>
</body>
</html>
