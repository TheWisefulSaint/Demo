<?php
require_once 'FoodItem.php';
require_once 'StationeryItem.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $ItemArr[] = new FoodItem(1001, "Sandwich", 2.50, "Pack"); 
        $ItemArr[] = new StationeryItem(1002, "Pencil", 1.00, "2gm");
        $ItemArr[] = new FoodItem(1003, "Sushi", 5.50, "Box"); 
        $ItemArr[] = new StationeryItem(1004, "Notebook", 4.70, "500gm");
        echo "<table border='1' padding='20px'><tr><th>Code</th><th>Description</th><th>Price</th><th>Unit/Weight</th></tr>"; 
        
        foreach($ItemArr as $item){
         echo "<tr><td>$item->code</td><td>$item->description</td><td>" . number_format($item->price,2).
              "</td><td>" . $item->getOtherAttributes()."</td></tr>";  
        }
        echo "</table>";
        ?>
    </body>
</html>