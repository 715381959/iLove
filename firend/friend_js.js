// JavaScript Document
var isOpen=false;
var friend;
var button;
function Animotionfriendform(){
	friend=document.getElementById("friend");
	button=document.getElementById("buttonforform");
	if(isOpen){
		friend.style.right="-230px";
		isOpen=false;
		button.style.background="url(pic/button_off.png)";
	}else{
		friend.style.right="0px";
		isOpen=true;
		button.style.background="url(pic/button%20_on.png)";
	}
}

function Initfriend(){
	var height=document.documentElement.clientWidth;
	var friend=document.getElementById("formforfriend");
	alert(friend.height);
}