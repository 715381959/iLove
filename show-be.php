<?php
include("head.php");
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
<link href="assets/css/show_before_css.css" rel="stylesheet" type="text/css" />
<script src="assets/js/jquery-2.1.4.js"></script>
<script src="assets/js/show_before_js.js"></script>


<body onload="Init()">
<div id="allpage">
	<div id="left">
		<div id="person">
        	<div id="personhead">
            	<div style="display:table-cell;vertical-align:middle;">
    				<img src="assets/images/照片.png" onload="if(this.width>=this.height){this.width=65;}else{this.height=65;}" />
                </div>
            </div>
            <div id="personmesage">
        		<font size="4">name</font>
                <div style="height:8px;"></div>
                <font size="3">个人简介</font>
            </div>
    	</div>
        <div id="aboutshow">
        	<div id="showhead">
        		<font size="5" style="font-weight:bold;">head</font>
            </div>
        	<textarea id="showmessage" disabled="disabled" >作品介绍
        	</textarea>
        </div>
    </div>
    <div id="center">
    	<div style="float:left; width:700px; overflow:hidden; padding-left:50px;">
    	<div id="centerpic" style="display:table;text-align:center;width:610px; height:610px;">
    		<div style="display:table-cell;vertical-align:middle;">
				<img id="showpic" src="assets/images/点赞后.png" onload="if(this.width>=this.height){this.width=600;}else{this.height=600;}"/>
        	</div>
        </div>
        </div>
        <div id="choosepic">
        	<div id="picbechoose">
            	<div style="display:table-cell; vertical-align:middle;">
        			<img onclick="Changepic(this)" src="assets/images/点赞前.png" onload="if(this.width>=this.height){this.height=this.height/this.width*140; this.width=140;}else{this.width=this.width/this.height*140; this.height=140;}"/>
                </div>
            </div>
        </div>
    </div>
    <div id="right">
    	<a href="show-talk.php"><img src="assets/images/no.png"  style=" width:100%;"/></a><br />
    	<a href="show-talk.php"><img src="assets/images/yes.png" style=" width:100%;"/></a>
    </div>
</div>
</body>
</html>
