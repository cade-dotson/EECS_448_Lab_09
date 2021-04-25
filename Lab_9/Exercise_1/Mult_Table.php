<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

echo "<style>
table, th, td {
  border: 1px solid black;
}
</style>";

echo "<head> Muliplication Table (100x100):<br></head>";
echo "<table><tr>";
for($i=0;$i<101;$i++){
  echo "<th> $i </th>";
}
echo "</tr>";

for($x=1;$x<101;$x++){
  echo "<tr> <th> $x </th>";

  for($j=1;$j<101;$j++){
    $s = $x * $j;
    echo "<td> $s </td>";
  }
  echo "</tr>";
 }
echo"</table>";


 ?>
