<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="jquery-1.10.2.js"></script>
<script type="text/javascript">
$(document).ready(function () {
$(".obrisi_link").click(function(){
var vrednost = ($(this).attr("id")).substring(7);
var red_tabele = $(this);
$.get("obrisi.php", { id: vrednost },
   function(data){
   if (data == 1){
   $(red_tabele).parent().parent().remove();
   }   
   });
});
});
</script>
</head>
<body>
<?php
include "konekcija.php";
$sql="SELECT id, drzava, narod, glgrad, brstanovnika, kontinent FROM drzava";
if (!$q=$mysqli->query($sql)){
die ("Nastala je greška pri izvođenju upita<br/>" . $mysqli->error);
}
if ($q->num_rows==0){
echo "Nema država";
} 
else {
//prelazi se u HTML ispis
?>
<table id="ta" width="600" border="1" cellpadding="5" cellspacing="2" style="text-align:center ">
<tr>
<td><b>Država</b></td>
<td><b>Narod</b></td>
<td><b>Glavni grad</b></td>
<td><b>Broj stanovnika</b></td>
<td><b>Kontinent</b></td>
<td><b><i>Akcija</i></b></td>
</tr>
<?php
while ($red=$q->fetch_object()){

?>
<tr>
<td><?php echo $red->drzava; ?></td> 
<td><?php echo $red->narod; ?></td>
<td><?php echo $red->glgrad; ?></td>
<td><?php echo $red->brstanovnika; ?></td>
<td><?php echo $red->kontinent; ?></td>
<td><a href="#" class="obrisi_link" id="obrisi_<?php echo $red->id;?>">Obriši zemlju</a></td>
<?php
}
?>
</table>
<?php
}
$mysqli->close();
?>
</body>
</html>
