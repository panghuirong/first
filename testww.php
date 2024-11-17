<?php
$servername="localhost:3306";
$username=$_GET['name'];
$password=$_GET['password'];
$database=$_GET['database'];
$ww=$_GET['ww'];

//创建链接
$conn = new mysqli($servername,$username,$password,$database);

//检测链接
if($conn->commect_error){
  die("链接失败:".$conn->connect_error);
}

//向数据库中插入数据
$sql = "INSERT INTO kksk(ww)  VALUES('". $ww."');";
 
if ($conn->query($sql)===TRUE){
  echo "succeed";
} else{
  echo"Error:".$comm->error;
}

$conn->close();
?>