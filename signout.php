<?php
session_start();
session_destroy();
echo "<Script Language='JavaScript'> alert('已安全退出，单击确认返回首页');window.location.href='index.php'</Script>"; 
include("index.php");
?>