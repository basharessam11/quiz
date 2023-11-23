<?php
include"../../sql.php";


$name=filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email=filter_var($_POST['email'], FILTER_SANITIZE_STRING);
$phone=filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
$pass=filter_var($_POST['password'], FILTER_SANITIZE_STRING);
$password= md5($pass);
$pr=filter_var($_POST['pr'], FILTER_VALIDATE_INT);

$a=$sql->check('user',['name'=>"$name"]);
if ($sql->check <1) {
	$sql->insert("user",["name"=>"$name","email"=>"$email","phone"=>"$phone",'password'=>"$password",'pr'=>"$pr"]);
header("location:../../dashbord.php?user=list&add=su");

}else{
	header("location:../../../dashbord.php?user=list&name=no");

}
