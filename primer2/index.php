<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="sugerisi.js" type="text/javascript"></script> 
<script type="text/javascript">
function place(ele){
    document.getElementById('txt').value = ele.innerHTML;
	document.getElementById("livesearch").style.display = "none";
}
</script>
<style type="text/css"> 
#livesearch{ 
  margin:5px;
  width:220px;
  }
#txt{
  border: solid #A5ACB2;
  margin:5px;
  } 
</style>
</head>
<body onload="document.getElementById('txt').focus()">
<form>
<input type="text" id="txt" size="32" onkeyup="sugestija(this.value)"> 
<div id="livesearch"></div>

</form>
</body>
</html>
