<?php
if (!isset ($_GET["id"])){
echo "Parametar ID nije prosleđen!";
} else {
$pomocna=$_GET["id"];
//uspostavljanje konekcije
include "konekcija.php";
//citanje podataka o drzavi
$sql="SELECT * FROM Drzava WHERE id='".$pomocna."'";

$rezultat = $mysqli->query($sql);
//ispis naziva kolona u tabeli
echo "<table border='1'>
<tr>
<th>Država</th>
<th>Većinski narod</th>
<th>Broj stanovnika</th>
<th>Glavni grad</th>
<th>Kontinent</th>
</tr>";
//ispis podataka o zemlji
while($red = $rezultat->fetch_object()){
 echo "<tr>";
 echo "<td>" . $red->drzava . "</td>";
 echo "<td>" . $red->narod . "</td>";
 echo "<td>" . $red->brstanovnika . "</td>";
 echo "<td>" . $red->glgrad . "</td>";
 echo "<td>" . $red->kontinent . "</td>";
 echo "</tr>";
 }
echo "</table>";

$mysqli->close();
}
?>
