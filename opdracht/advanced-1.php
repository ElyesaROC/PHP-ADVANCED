<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="advanced-2.php" method="POST">
    tekstkleur: <select name="tekstkleur" id="tekstkleur">
    <?php
    $kleuren = array("red", "blue", "green", "black", "brown");

    foreach($kleuren as $kleur){
    echo "<option value=".$kleur.">".$kleur."</option>";  
    }
    
    ?>
    
    </select><br>
    dikte: <select name="dikte" id="dikte">
    <?php
    $diktes = array("1", "2", "3", "4", "5");

    foreach($diktes as $dikte){
    echo "<option value=".$dikte.">".$dikte."</option>";  
    }
    
    ?>
    
    </select><br>
    padding: <select name="padding" id="padding">
    <?php
    $paddings = array("0", "10", "20", "30", "40");

    foreach($paddings as $padding){
    echo "<option value=".$padding.">".$padding."</option>";  
    }
    
    ?>
    
    </select><br>
    <input type="submit" value="verstuur">
    
    </form>
</body>
</html>