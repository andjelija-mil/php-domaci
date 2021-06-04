var xmlHttp
function proveri(str)
{
xmlHttp=GetXmlHttpObject()
if (xmlHttp==null){
 alert ("Browser does not support HTTP Request")
 return
}
 
var url="provera.php"
url=url+"?naziv="+str
url=url+"&sid="+Math.random()
xmlHttp.onreadystatechange=stateChanged 
xmlHttp.open("GET",url,true)
xmlHttp.send(null)
}
function stateChanged(){ 

if (xmlHttp.readyState==4){
	
 	if (xmlHttp.responseText=="0"){
		document.getElementById("user").innerHTML="Država sa takvim imenom već postoji u bazi";
		document.getElementById("ime").focus();
	} else {
				document.getElementById("user").innerHTML="Ime države je dostupno";
	}

}
}
function GetXmlHttpObject(){
var xmlHttp=null;
try {
 // Firefox, Opera 8.0+, Safari
 xmlHttp=new XMLHttpRequest();
 } catch (e) {
 //Internet Explorer
 try {
  
  xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
  } catch (e) {
  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
 }

return xmlHttp;
}
