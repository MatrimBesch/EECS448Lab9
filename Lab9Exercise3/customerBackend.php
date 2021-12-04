<?php
    $username = $_POST["usernameText"];
    $password = $_POST["passwordText"];
    $product1Qty = $_POST["product1Qty"];
    $product2Qty = $_POST["product2Qty"];
    $product3Qty = $_POST["product3Qty"];

    $product1Price = $product1Qty*99;
    $product2Price = $product2Qty*98;
    $product3Price = $product3Qty*97;

    $shippingType = $_POST["shipping"];
    if($shippingType = "7 Days"){
        $shippingPrice = 0;
    }
    else if($shippingType = "3 Days"){
        $shippingPrice = 5;
    }
    else if($shippingType = "Express"){
        $shippingPrice = 50;
    }
    $totalCost = $product1Price + $product2Price + $product3Price + $shippingPrice;

    echo "<p> Welcome " . $username . "!</p>";
    echo "<p> Your password is " . $password . "</p>";
    echo "<table>";
    echo "<tr><td></td>";
    echo "<td>Quantity</td><td>Cost</td><td>Total</td></tr>";
    echo "<tr><td>Product1</td><td>" . $product1Qty . "</td><td>$99</td><td>$" . $product1Price . "</td></tr>";
    echo "<tr><td>Product2</td><td>" . $product2Qty . "</td><td>$98</td><td>$" . $product2Price . "</td></tr>";
    echo "<tr><td>Product3</td><td>" . $product3Qty . "</td><td>$97</td><td>$" . $product3Price . "</td></tr>";
    echo "<tr><td>Shipping</td><td>" . $shippingType . "</td><td>$" . $shippingPrice . "</td></tr>";
    echo "<tr><td>Total Cost</td><td>     $" . $totalCost . "</td></tr>";

    echo "</table>"
?>