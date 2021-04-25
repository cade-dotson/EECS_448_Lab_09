<?php
echo '<link rel="stylesheet" type="text/css" href="style.css"></head>';

$doot1 = $_POST["doot1quantity"];
$doot2 = $_POST["doot2quantity"];
$doot3 = $_POST["doot3quantity"];
$username = $_POST["name"];
$password = $_POST["password"];
$shippingcost = $_POST["shipping"];
$total1 = $doot1 * 1000;
$total2 = $doot2 * 1500;
$total3 = $doot3 * 2500;
$total = $total1 + $total2 + $total3 + $shippingcost;

if ($shippingcost == 0){
  $shippingtype = "FREE";
}else if ($shippingcost == 5){
  $shippingtype = "Three Day";
}else if ($shippingcost == 50){
  $shippingtype = "Overnight";
}

echo"<h2>Thank you for your purchase, $username!</h2>";
echo"<h3>Your password is: $password</h3> <h4>(because we here at Good Doots like to watch the world burn)</h4>";
echo"<hr><h3>Your Receipt:</h3>";

echo"<table><tr><th></th><th>Quantity</th><th>Cost Per</th><th>Sub Total</th></tr>";
echo"<tr><th>Original Doot</th><td>$doot1</td><td>$1,000</td><td>$$total1</td></tr>";
echo"<tr><th>Doom Themed Doot</th><td>$doot2</td><td>$1,500</td><td>$$total2</td></tr>";
echo"<tr><th>Angry Doot</th><td>$doot3</td><td>$2,500</td><td>$$total3</td></tr>";
echo"<tr><th colspan='2'>Shipping</th><td>$shippingtype</td><td>$$shippingcost</td></tr>";
echo"<tr><th colspan='3'>Total Cost</th><th>$$total</th></tr></table>";


 ?>
