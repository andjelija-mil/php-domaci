<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="jquery-1.10.2.js"></script>
<script type="text/javascript">
$(document).ready(function () {
$("#kombo_feed").change(function(){
var vrednost = $("#kombo_feed").val();
$.get("getrss.php", { feed: vrednost },
   function(data){
     $("#rssOutput").html(data);
   });
});
});
</script>
</head>
<form> 
Odaberi RSS-Feed:
<select id="kombo_feed">
<option value="B92">B92</option>
<option value="RTS">RTS</option>
</select>
</form>
<p><div id="rssOutput">
<b>RSS Feed će biti prikazan u ovom delu.</b></div></p>
</body>
</html>
