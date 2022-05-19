<?php

$text = 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...';

$word_censored = $_GET["censored"];
$censored_text = str_replace($word_censored, "***" ,$text);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <!-- stampa a schermo paragrafo e lunghezza -->
    <h1> Testo: 
        <p>
            <?php echo ($text) ?> 
        </p>
    </h1> 
    <p> Lunghezza del testo: <?php echo strlen ($text) ?> </p>
    <!-- testo censurato -->
    <!-- link da inserire localhost:8800/php-badwords/?censored= (qui parola da censurare) -->
    <h2> parola censurata 
        <p> <?php echo ($censored_text) ?> </p>
    </h2>
</body>
</html>