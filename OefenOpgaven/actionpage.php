<?php
/* array invullen */ 

$a[0] = "jan";
$a[1] = "rob";
$a[2] = "piet";

$a = array("jan", "rob", "piet");

echo '<table border="1" width="200">';
foreach($a as $value){
    //maak een rij
    echo "<tr>";

    //maak een kolom
    echo "<td>";
    //print de namen onder elkaar

    echo $value . "<br>";

    //sluit kolom
    echo "</td>";

    //sluit rij
    echo "</tr>";
}
echo '</table>';


echo "Hello <br>";
echo $_POST["uname"] ;
$username = $_POST["uname"];

/* print een foutmelding als username < 5 tekens */

echo $_POST["password"] ;
$password = $_POST["password"]



?>
