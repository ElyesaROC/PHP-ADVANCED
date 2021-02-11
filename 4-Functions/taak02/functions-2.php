<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function rekenUit($getal1, $getal2, $getal3) {

    $helesom = $getal1 + $getal2 + $getal3;
    return $helesom;

}


echo "Als ik de getallen 4, 2 en 9 bij elkaar optel, is de uitkomst " . rekenUit(4, 2, 9) . "<br>";
echo "Als ik de getallen 6, 24 en 8 bij elkaar optel, is de uitkomst " . rekenUit(6, 24, 8) . "<br>";
echo "Als ik de getallen 10, 9 en 20 bij elkaar optel, is de uitkomst " . rekenUit(10, 9, 20) . "<br>";

?>
</body>
</html>