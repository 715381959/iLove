// JavaScript Document
var showm;
var testm;
var imgname=0;
var pics=new Array();
var a;

function init(){
	a=document.getElementById("picbeupload");
	showm=document.getElementById("showmodel");
	testm=document.getElementById("testmodel");
	Showbutton();
}

function Showbutton(){
	showm.style.display="";
	testm.style.display="none";
}

function Testbutton(){
	showm.style.display="none";
	testm.style.display="";
}

function Findpic(){
	var i=document.getElementById("inputpic");
	i.click();	
}

function Showpic(){
	var file = document.getElementById("inputpic").files[0];  
    if(!/image\/\w+/.test(file.type)){  
        alert("看清楚，这个需要图片！");  
        return false;  
    }  
    var reader = new FileReader();  
    //将文件以Data URL形式读入页面  
    reader.readAsDataURL(file);  
    reader.onload=function(e){  
        //var result=document.getElementById("result");
		var result=document.createElement("div");  
		a.appendChild(result);
		imgname++;
		pics[imgname]=result;
        //显示文件  
        result.innerHTML='<div id="result"><div style="display:table;text-align:center;"><div style="display:table-cell;vertical-align:middle; width:160px;height:300px;"><img name="'+imgname+'" src="' + this.result +'" alt="" onload="if(this.width/this.height >= 160/300){this.width = 160;this.height=this.height*(160/this.width);} else{this.height=300;this.width=this.width*(300/this.height);}"/></div></div><button id="'+imgname+'"  style="margin-left:50px;" onclick="Deletebutton(this)">删除</button></div>';  
    } 
}

function Deletebutton(button){
	a.removeChild(pics[button.id]);
}