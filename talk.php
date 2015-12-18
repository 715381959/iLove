<?php
include("head.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
<link href="assets/css/talk.css" rel="stylesheet" type="text/css" />
<script src="assets/js/jquery-2.1.4.js"></script>
<script src="assets/js/bootstrap.min.js"></script>


<body>

	<div id="talkform">
    	<div id="talkhead">
        	<font size="5">name</font>
            <a href="https://www.baidu.com/" ><img id="talkban" src="assets/images/屏蔽.png"></img></a>
        </div>
        <div id="talkshow">
        	<div id="leftmessage">
            	<div class="toleft" id="talkpic">
                	<div style="display:table-cell; vertical-align:middle;">
            			<img src="assets/images/照片.png" onload="if(this.width>=this.height){this.height=this.height/this.width*40;this.width=40;}else{this.width=this.width/this.height*40;this.height=40;}"/>
                	</div>
                </div>
                <div class="toleft" id="talkmessage">
            		<font size="+1">对方说的话用这个</font>
                </div>
            </div>
            <div id="rightmessage">
            	<div class="toright" id="talkpic">
                	<div style="display:table-cell; vertical-align:middle;">
            			<img src="assets/images/照片.png" onload="if(this.width>=this.height){this.height=this.height/this.width*40;this.width=40;}else{this.width=this.width/this.height*40;this.height=40;}"/>
                	</div>
                </div>
                <div class="toright" id="talkmessage">
            		<font size="+1">自己说的话用这个</font>
                </div>
            </div>
        </div>
        <div id="talkinput">
        	<input id="inputmessage" />
            <br/>
            <br/>
            <input class="btn btn-action" style="margin-left:520px; width:100px; height:30px; padding-left:35px; padding-top:7px;" type="submit" value="发送"/> 
        </div>
    </div>

</body>
</html>