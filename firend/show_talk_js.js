// JavaScript Document
var talkinput;
function Callback(button){
	talkinput=document.getElementById("talkinput");
	talkinput.value="@"+button.name+":";
	window.scrollTo(0, document.getElementsByTagName('BODY')[0].scrollHeight);
}