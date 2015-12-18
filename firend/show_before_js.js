// JavaScript Document
var showpic;
function Changepic(bechoose){
	showpic=document.getElementById("showpic");
	showpic.src=bechoose.src;
	var width = 600;
	if(bechoose.width>=bechoose.height){
		var i=width/bechoose.width;
		$('#showpic').css('width',i*bechoose.width);
		$('#showpic').css('height',i*bechoose.height);
	}else{
		var i=width/bechoose.height;
		$('#showpic').css('width',i*bechoose.width);
		$('#showpic').css('height',i*bechoose.height);
	}
}
