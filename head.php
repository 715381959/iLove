<?php
session_start();
echo <<<END
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Find Your Own Love</title>
 
	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
	<link href="assets/css/basic.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/jquery.Jcrop.css" rel="stylesheet" type="text/css" />
	<script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"> </script>
    <script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</head>
<body style="background-color: #efefef;position:relative;z-index:2;">
	<div class="navbar navbar-inverse headroom" >
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" alt="Progressus HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					
					<li>
						<a href="show-be.php">发现 </a>
						
					</li>
					<li><a href="rank.php">榜单</a></li>
END;
if(isset($_SESSION['uid'])){
	echo "<li><a class=\"btn\" href=\"user.php\">".$_SESSION["name"]."</a></li>";
	//echo $_GET['out_id'];
  if(isset($_GET['out_id'])){
      echo "<Script Language='JavaScript'> if(confirm('确认退出？单击确认退出登陆。')){window.location.href='signout.php'}</Script>";

   }
   echo "<li><a href=\"?out_id=0\" >登出</a></li>";
}
else{
	echo "<li><a class=\"btn\" href=\"signin.php\">登陆 / 注册</a></li>";
}
echo <<<END
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
END;
include("guanzhu.php");
?>
