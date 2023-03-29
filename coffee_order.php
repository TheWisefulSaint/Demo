<?php
include "discount_info.php";
define('UNIT_PRICE', 5.50);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>MyDot Coffee</h1>
        <form action='coffee_order.php' method='POST'>
            <p>Number of bags: <input type="text" name="quantity" value="" size="15"/> </p>
            <p><input type="submit" value="Calculate" name="calculate"/></p>
        </form>

        <?php
        if (isset($_POST['quantity'])) {
            $quantity = trim($_POST['quantity']);
            $total_charge = $quantity * UNIT_PRICE;
            echo "<p>Price for $quantity bags = RM" . $total_charge . "</p><br/>";
            $discount = $total_charge * getDiscountRate($quantity) / 100.0;
            echo "Discount = RM " . $discount . "<br/>";
            $total_charge -= $discount;
            echo "Your total charge = RM" . $total_charge . "<br/>";
            if ($total_charge > 1000) {
                echo "You will get 1 free movie ticket";
            }
        }
        ?>
    </body>
</html>
