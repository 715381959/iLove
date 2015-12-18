<?php
class Connect {
public function sign_in(){
    include("conf.php");
    /*$host="localhost";
    $user="root";
    $pwd="";
    $dbname="userinfo";
    $connection=mysql_connect($host,$user,$pwd);*/
    $email=trim($_POST["Email"]);
    $password=$_POST["Password"];
if($connection){
    $password = md5($password);
    mysql_select_db('userinfo',$connection);
    $sql="SELECT * FROM test_uinfo WHERE Email='".$email."' AND Password='".$password."'";
    $result=mysql_query($sql);
    $row=mysql_fetch_array($result);
    //print_r($row);
 if($row){
        $_SESSION["uid"]=$row["Uid"];
        $_SESSION["name"]=$row["Name"];
        //echo "<br>".$_SESSION["uid"];
        //echo "<br>".$row["Email"]."登陆成功<br>";
        echo "<Script Language='JavaScript'> alert('".$email."登陆成功,单击确认返回首页');window.location.href='index.php'</Script>";
        //echo '<p><a herf="">返回首页</a></p>';
    }else {
        echo "<Script Language='JavaScript'> alert('用户名或密码错误')</Script>";
        exit(); 
    }
}
else {
    echo "<Script Language='JavaScript'> alert('服务器未响应')</Script>";
        exit(); 
}
}
function sign_up(){                                
    /*$host="localhost";
    $user="root";
    $pwd="";
    $dbname="userinfo";*/
    include("conf.php");
    $name=trim($_POST["Name"]);
    $email=trim($_POST["Email"]);
    $password=$_POST["Password"];
    $password2=$_POST["Password2"];
    //$connection=mysql_connect($host,$user,$pwd);
 /*   if (!preg_match('/^[a-zA-Z]+$/', $name)) {
        echo "<Script Language='JavaScript'> alert('请用英文或拼音输入Firstname与Lastname')</Script>";
        exit();
    }*/
    if (!preg_match('/^\w+@\w+\.\w+$/i', $email)) {
        echo "<Script Language='JavaScript'> alert('请输入正确的邮箱地址')</Script>";
        exit(); 
    }
    if(strlen($password)<6){
        echo "<Script Language='JavaScript'> alert('密码不得少于六位')</Script>";
        exit(); 
    }
    if ($password!=$password2) {
        echo "<Script Language='JavaScript'> alert('再次输入的密码不同，请重新输入')</Script>";
        exit(); 
    }
    if($_POST["Checkbox"]!="1"){
        echo "<Script Language='JavaScript'> alert('请阅读注册协议')</Script>";
        exit();
    }
if($connection){
    //echo "连接服务器成功<br>";
    $password = md5($password);
    mysql_select_db($dbname,$connection);
    $sqlin="SELECT * FROM test_uinfo WHERE Email='".$email."'";
    $resultin=mysql_query($sqlin);
    $rowin=mysql_fetch_array($resultin);    
    if($rowin){
       echo "<Script Language='JavaScript'> alert('该邮箱已注册，请重新输入')</Script>";
        exit();  
    }else{
    $sql="INSERT INTO test_uinfo (Name,Email,Password) VALUES ('".$name."','".$email."','".$password."')";
    $result=mysql_query($sql);
    if($result){
        echo "<Script Language='JavaScript'> alert('".$email."注册成功,单击确认返回登陆');window.location.href='signin.php'</Script>";
    }else{
        echo "<Script Language='JavaScript'> alert('注册失败')</Script>";
        exit(); 
    }
}
}
}
}
?>