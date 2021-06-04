<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="obradiglasanje.js" type="text/javascript"></script> 
</head>
<body>
<?php
include "konekcija.php";
$sql="SELECT * FROM Drzava";
$rezultat = $mysqli->query($sql);
?>
<div id="poll">
<h2>Za koju zemlju glasate?</h2>
<form>
<?php
while($red = $rezultat->fetch_object()){
?>
<?php echo $red->drzava;?>
<input type="radio" name="vote" 
value="<?php echo $red->id;?>" onclick="glasaj(this.value)">
<br>
<br>
<?php
}
$mysqli->close();
?>
</form>
</div>
</body>
