// JavaScript Document

function Uploadhead(){
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
		var result=document.getElementById("head");
		var result1=document.getElementById("head_1");
		var result2=document.getElementById("head_2");
		var result3=document.getElementById("head_3");
        //显示文件  
        result.src=reader.result; 
		result1.src=reader.result; 
		result2.src=reader.result; 
		result3.src=reader.result;  
    } 
}