<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<form action="/examples/php/select-action.php" method="post">
    <select name="products">
        <option selected="selected">Choose one</option>
        <?php
        // A sample product array
        $klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");

        // Iterating through the product array
        foreach($klassen as $klas){
            echo '<option value="' . strtolower($klas) . '">' . $klas . '</option>';
        }
        ?>
    </select>
    <input type="submit" value="post">
</form>
</body>
</html>





