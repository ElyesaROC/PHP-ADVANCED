
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .kleur{
      color: <?php echo $Kleur;?>;
    }
    </style>
</head>
<body>
<?php schrijfKleur("purple","blue","green","red");?>


<?php
function schrijfKleur($Kleur,$kleur1,$kleur2,$kleur3) {

    echo "<p style='color:$Kleur;'>deze tekst heeft de kleur $Kleur</p>";
    echo "<p style='color:$kleur1;'>deze tekst heeft de kleur $kleur1</p>";
    echo "<p style='color:$kleur2;'>deze tekst heeft de kleur $kleur2</p>"; 
    echo "<p style='color:$kleur3;'>deze tekst heeft de kleur $kleur3</p>";
  }
  
 
  
  ?>
  



</body>
</html>