// JavaScript Document

function Changeimgsize(img){
	if((img.width/img.height)>=(180/280)){
		img.height=(img.height/img.width)*180;
		img.width=180;
	}else{
		img.width=(img.width/img.height)*280;
		img.height=280;
	}
}