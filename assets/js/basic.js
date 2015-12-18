$(function(){
    //默认图像居中显示
    cutImage($(".jcrop_w>img"));

    var _Jw = ($("#target").width() - 110) / 2 ,
            _Jh = ($("#target").height() - 110) / 2 ,
            _Jw2 = _Jw + 110,
            _Jh2 = _Jh + 110;

    $('#target').Jcrop({
        setSelect: [_Jw, _Jh, _Jw2, _Jh2],
        onChange: showPreview,
        onSelect: showPreview,
        bgFade: true,
        bgColor: "white",
        aspectRatio: 110/110,
        bgOpacity: .5
    });
    $("#idLeft").click(function(e){
        imgRotate(-90);
        return false;
    });
    $("#idRight").click(function(e){
        imgRotate(90);
        return false;
    });
    $("#idBig").click(function(e){
        imgToSize(20);
        return false;
    });
    $("#idSmall").click(function(e){
        imgToSize(-20);
        return false;
    });

    $("#submit").click(function(e){
        submitIMG();
        return false;
    });
    $("#refresh").click(function(e){
            alert('asdad');
        });
});
var width1,height1,marginLeft1,marginTop1,left1,top1;
/*********************** 
* 函数：判断滚轮滚动方向 
* 作者：walkingp 
* 参数：event 
* 返回：滚轮方向 1：向上 -1：向下 
*************************/ 
var scrollFunc=function(e){ 
    var direct=0; 
    e=e || window.event; 
     /*
    var t1=document.getElementById("wheelDelta"); 
    var t2=document.getElementById("detail"); */
    if(e.wheelDelta){//IE/Opera/Chrome 
        //t1.value=e.wheelDelta; 
         imgToSize(0-e.wheelDelta/6);
       
    }else if(e.detail){//Firefox 
        //t2.value=e.detail; 
        imgToSize(0-e.detail*4);
    } 
    ScrollText(direct); 
} 
/*注册事件*/ 
if(document.addEventListener){ 
    document.addEventListener('DOMMouseScroll',scrollFunc,false); 
}//W3C 
window.onmousewheel=document.onmousewheel=scrollFunc;//IE/Opera/Chrome 


//图片旋转
function imgRotate(deg){
    var img1 = $(".jcrop_w>img"),
        _data = parseInt($(".jc-demo-box").attr("data"));
    if($.browser.version == 8.0 || $.browser.version == 7.0 || $.browser.version == 6.0 ){
        var sin = Math.sin(Math.PI / 180 * (_data + deg)), cos = Math.cos(Math.PI / 180 * (_data + deg));
        var _filter = "progid:DXImageTransform.Microsoft.Matrix(M11=" + cos + "," +  "M12=" + (-sin)
            + ",M21=" + sin+ ",M22=" + cos + ",SizingMethod='auto expand')";
        img1.css({
            filter: _filter
        });
        $('.pre-1 img,.pre-2 img,.pre-3 img').css({
            filter: _filter
        });

    }else{
        var _deg = deg + _data;
        var _val =  "rotate("+ _deg + "deg)";
        img1.css({
            "-webkit-transform": _val,
               "-moz-transform": _val,
                "-ms-transform": _val,
                 "-o-transform": _val,
                    "transform": _val
        });
        $('.pre-1 img,.pre-2 img,.pre-3 img').css({
            "-webkit-transform": _val,
               "-moz-transform": _val,
                "-ms-transform": _val,
                 "-o-transform": _val,
                    "transform": _val
        });
    }

    var     fiw = $('.jcrop_w>img').width(),
            fih = $('.jcrop_w>img').height(),
            ow = Math.floor((340 - fiw) / 2),
            oh = Math.floor((340 - fih) / 2),
            cx = $("#small").position().left,
            cy = $("#small").position().top,
            rx = 110 / $("#small").width(),
            ry = 110 / $("#small").height(),
            rx1 = 90 / $("#small").width(),
            ry1 = 90 / $("#small").height(),
            rx2 = 40 / $("#small").width(),
            ry2 = 40 / $("#small").height();



    if($.browser.version == 8.0 || $.browser.version == 7.0 || $.browser.version == 6.0){
        pre_img2($('.pre-1 img'), rx, fih, ry, fiw, cx, cy, ow, oh);
        pre_img2($('.pre-2 img'), rx1, fih, ry1, fiw, cx, cy, ow, oh);
        pre_img2($('.pre-3 img'), rx2,  fih, ry2, fiw, cx, cy, ow, oh);
    }else{
        pre_img2($('.pre-1 img'), rx, fiw, ry, fih, cx, cy, ow, oh);
        pre_img2($('.pre-2 img'), rx1, fiw, ry1, fih, cx, cy, ow, oh);
        pre_img2($('.pre-3 img'), rx2, fiw, ry2, fih, cx, cy, ow, oh);
    }

    $(".jcrop_w img").css({
        left: ow,
        top: oh
    });

    if( deg > 0){
        if(_data == 270){
            _data = 0;
        }else{
            _data = _data + 90;
        }
    }else{
        if(_data == 0){
            _data = 270;
        }else{
            _data = _data - 90;
        }
    }
	$("#d").val(_data);
    $(".jc-demo-box").attr("data", _data);
}

//放大缩小图片
function imgToSize(size) {
    var iw = $('.jcrop_w>img').width(),
        ih = $('.jcrop_w>img').height(),
        _data = $(".jc-demo-box").attr("data"),_w,_h;
        if(iw>110&&iw<700){
            _w = Math.round(iw + size),
            _h = Math.round(((iw + size) * ih) / iw);
        }else if (iw<110){
            _w = Math.round(111),
            _h = Math.round(((111) * ih) / iw);}
        else{
            _w = Math.round(699),
            _h = Math.round(((699) * ih) / iw);}
    if(($.browser.version == 8.0 || $.browser.version == 7.0 || $.browser.version == 6.0) && (_data == 90 || _data == 270)){
        $('.jcrop_w>img').width(_h).height(_w);
    }else{
        $('.jcrop_w>img').width(_w).height(_h);
    }

    var     fiw = $('.jcrop_w>img').width(),
            fih = $('.jcrop_w>img').height(),
            ow = (340 - fiw) / 2,
            oh = (340 - fih) / 2,
            cx = $("#small").position().left,
            cy = $("#small").position().top,
            rx = 110 / $("#small").width(),
            ry = 110 / $("#small").height(),
            rx1 = 90 / $("#small").width(),
            ry1 = 90 / $("#small").height(),
            rx2 = 40 / $("#small").width(),
            ry2 = 40 / $("#small").height();

    if(($.browser.version == 8.0 || $.browser.version == 7.0 || $.browser.version == 6.0) && (_data == 90 || _data == 270)){
        pre_img2($('.pre-1 img'), rx, fih, ry, fiw, cx, cy, ow, oh);
        pre_img2($('.pre-2 img'), rx1, fih, ry1, fiw, cx, cy, ow, oh);
        pre_img2($('.pre-3 img'), rx2, fih, ry2, fiw, cx, cy, ow, oh);
    }else{
        pre_img2($('.pre-1 img'), rx, fiw, ry, fih, cx, cy, ow, oh);
        pre_img2($('.pre-2 img'), rx1, fiw, ry1, fih, cx, cy, ow, oh);
        pre_img2($('.pre-3 img'), rx2,  fiw, ry2, fih, cx, cy, ow, oh);
    }
    $(".jcrop_w img").css({
        left: ow,
        top: oh
    });

};

        //
function pre_img2(obj, rx, iw, ry, ih, cx, cy, ow, oh){
            width1=Math.round(rx * iw);
            height1=Math.round(ry * ih);
            obj.css({
                width: Math.round(rx * iw) + 'px',
                height: Math.round(ry * ih) + 'px'
            });
            if( cy >= oh && cx >= ow){
                marginLeft1=Math.round(rx * (cx - ow));
                marginTop1=Math.round(ry * (cy - oh));
                obj.css({
                    marginLeft: '-' + Math.round(rx * (cx - ow)) + 'px',
                    marginTop: '-' + Math.round(ry * (cy - oh)) + 'px'
                });
            }else if( cy <= oh && cx >= ow){
                marginLeft1=Math.round(rx * (cx - ow));
                marginTop1=Math.round(ry * (oh - cy));
                obj.css({
                    marginLeft: "-" + Math.round(rx * (cx - ow)) + 'px',
                    marginTop: Math.round(ry * (oh - cy)) + 'px'
                });
            }else if( cy >= oh && cx <= ow){
                marginLeft1=Math.round(rx * (ow - cx));
                marginTop1=Math.round(ry * (cy - oh));
                obj.css({
                    marginLeft: Math.round(rx * (ow - cx)) + 'px',
                    marginTop: '-' + Math.round(ry * (cy - oh)) + 'px'
                });
            }else if( cy <= oh && cx <= ow){
                marginLeft1=Math.round(rx * (ow - cx));
                marginTop1= Math.round(ry * (oh - cy));
                obj.css({
                    marginLeft: Math.round(rx * (ow - cx)) + 'px',
                    marginTop: Math.round(ry * (oh - cy)) + 'px'
                });
            }

        };
//默认图像位置
function cutImage(obj) {
    var w = 340,
        h = 340,
        iw = obj.width(),
        ih = obj.height();
    if(iw > w || ih > h){
        if(iw / ih > w / h){
            obj.css({
                width: w,
                height: w * ih / iw,
                top: (h - (w * ih / iw)) / 2,
                left: 0
            });
        }else{
            obj.css({
                height: h,
                width: h * iw / ih,
                top: 0,
                left: (w - (h * iw / ih)) / 2
            });
        }
    }else{
        obj.css({
            left: (w - iw) / 2,
            top: (h - ih ) / 2
        });
    }
}
function showPreview(c){
	var iw = $('.jcrop_w>img').width(),
		ih = $('.jcrop_w>img').height(),
        ow = (340 - iw) / 2,
        oh = (340 - ih) / 2,
		rx = 110 / c.w,
		ry = 110 / c.h,
		rx1 = 90 / c.w,
		ry1 = 90 / c.h,
		rx2 = 40 / c.w,
		ry2 = 40 / c.h,
		_data = $(".jc-demo-box").attr("data");

	if(($.browser.version == 8.0 || $.browser.version == 7.0 || $.browser.version == 6.0) && (_data == 90 || _data == 270)){
		pre_img2($('.pre-1 img'), rx, ih, ry, iw, c.x, c.y, ow, oh);
		pre_img2($('.pre-2 img'), rx1, ih, ry1, iw, c.x, c.y, ow, oh);
		pre_img2($('.pre-3 img'), rx2, ih, ry2, iw, c.x, c.y, ow, oh);
	}else{
		pre_img2($('.pre-1 img'), rx, iw, ry, ih, c.x, c.y, ow, oh);
		pre_img2($('.pre-2 img'), rx1, iw, ry1, ih, c.x, c.y, ow, oh);
		pre_img2($('.pre-3 img'), rx2, iw, ry2, ih, c.x, c.y, ow, oh);
	}
	$('#x').val(c.x);
	$('#y').val(c.y);
	$('#w').val(c.w);
	$('#h').val(c.h);
}
function submitIMG(){
   
    var str="?id=";
   
    str=str+width1+','+height1+','+marginTop1+','+marginLeft1+','+left1+','+top1;
    
    window.location.href=str;

}