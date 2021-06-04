<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="jquery-1.10.2.js"></script>
<script type="text/javascript">
$(document).ready(function () {
$("#txt").keyup(function(){
var vrednost = $("#txt").val();
$.get("suggest.php", { unos: vrednost },
   function(data){
    $("#livesearch").show();
    $("#livesearch").html (data);
   });
});
});
function place(ele){
	$("#txt").val(ele.innerHTML);
	$("#livesearch").hide();
}
</script>
<style type="text/css"> 
#livesearch{ 
  margin:5px;
  width:220px;
  border: 1px solid;
  display: none;
  }
#txt{
  border: solid #A5ACB2;
  margin:5px;
  } 
</style>
</head>
<body onload="document.getElementById('txt').focus()">
<form>
<input type="text" id="txt" size="32"> 
<div id="livesearch"></div>

</form>
</body>
</html>
