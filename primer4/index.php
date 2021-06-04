<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Validacija forme</title>
<script type="text/javascript" src="provera.js"></script>
</head>
<body>
<form>
<h1>Ova forma služi kao primer korišćenja AJAX-a u validaciji forme</h1>
<br>
<h2>Podaci o državi</h2>
<br>
<b>Naziv države</b> 
<input type="text" name="naziv" id="ime" onblur="proveri(document.getElementById('ime').value)"><div  id="user">Informacija o validnosti imena drzave</div>
<br>
<b>Narod</b> 
<input type="text" name="narod" id="">
<br>
<br>
<b>Glavni grad</b> 
<input type="text" name="glgrad">
<br>
<br>
<b>Broj stanovnika</b> 
<input type="text" name="brst">
<br>
<br>
<br>
<b>Izaberite kontinent:</b>
<input type="radio" name="kont" value="eu"> Evropa
<input type="radio" name="kont" value="af"> Afrika
<input type="radio" name="kont" value="az"> Azija
<br>
<br>
<input type="submit" value="Registruj" name="submit"> 
<input type="reset" value="Obrisi podatke" namer="reset">
</form>
</body>
</html>
