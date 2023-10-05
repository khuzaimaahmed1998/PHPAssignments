<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo "<h1>Positive, negative, even & odd numbers</h1>";
    $numberber = 2;

    if($number > 0){

    echo $number . "positive number <br>";

    }else

    echo $number . "negative number <br>";
    
    if($number %2==0){

    echo $number . "even number <br>";

    }else

    echo $number . "odd number <br>";

    ?>
</body>
</html>
