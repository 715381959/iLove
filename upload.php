<?php
include("head.php");
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
<link href="assets/css/upload_css.css" rel="stylesheet" type="text/css" />
<script src="assets/js/jquery-2.1.4.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/upload_js.js"></script>


<body onload="init()">
	<div id="choose">
    	<div id="showhead">
			<input type="button" onclick="Showbutton()" style="border:none; height:40px; background:#FFF;" value="展示模式"/>
        </div>
        <div id="showhead">
    		<input type="button" onclick="Testbutton()" style="border:none; height:40px; background:#FFF;" value="长文模式"/>
        </div>
    </div>
    <div id="showmodel">
    	<input id="inputpic" type="file" style="display:none;" onchange="Showpic()"/>
        <div id="picbeupload"></div>  <br />
        <img id="tofind" src="assets/images/点击增加.png" onclick="Findpic()"/>
        <div style="clear:both; text-align:center;"><input id="title" style="width:860px; height:25px;font-size:100%;" placeholder="请输入标题"/></div>
        <textarea id="showtest"  style="resize:none;" placeholder="请输入描述"></textarea>
        <input class="btn btn-action" type="submit"  value="提交" style="margin-left:450px;margin-bottom:50px;"/>
    </div>
    <div id="testmodel">
    	<textarea id="testtest" style="resize:none;">
        </textarea>
        <input class="btn btn-action" type="submit" value="提交" style="margin-left:500px;margin-bottom:50px;" />
    </div>
</body>
</html>
