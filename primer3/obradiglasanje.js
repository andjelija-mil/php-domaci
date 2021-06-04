var xmlHttp

function glasaj(izbor){
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null){
 alert ("Browser does not support HTTP Request");
 return;
 } 
var url="upisglasanja.php";
url=url+"?glas="+izbor;
url=url+"&sid="+Math.random();
xmlHttp.onreadystatechange=stateChanged;
xmlHttp.open("GET",url,true);
xmlHttp.send(null);
} 

function stateChanged(){ 
 if (xmlHttp.readyState==4){ 
 document.getElementById("poll").innerHTML=xmlHttp.responseText;
 } 
} 

function GetXmlHttpObject(){ 
var objXMLHttp=null
if (window.XMLHttpRequest){
 objXMLHttp=new XMLHttpRequest();
 }
else if (window.ActiveXObject){
 objXMLHttp=new ActiveXObject("Microsoft.XMLHTTP");
 }
return objXMLHttp;
}
