<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style = "background-color: <?php echo $_POST['tekstkleur'] ?>"> 

<table
style = "background-color: white;border:<?php echo $_POST['dikte'] ?>px solid black; padding:<?php echo $_POST['padding'] ?>px;"
>
<?php
function maakRij($key,$value){
    echo "<tr> <td>". $key. "</td> <td>".$value. "</td> </tr>";
}
#echo print_r($_POST, true);
$gegevens = array("naam"=>"Elyesa", "achternaam"=>"Caglar", "woonplaats"=>"Amsterdam", "leeftijd"=>"18 jaar");
foreach($gegevens as $key => $value){
    maakRij($key,$value);
}
?>




</table>
</body>
</html>
