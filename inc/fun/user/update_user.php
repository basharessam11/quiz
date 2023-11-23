
<?php
include"../../sql.php";

$id=filter_var($_POST['id'], FILTER_VALIDATE_INT);
$name=filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email=filter_var($_POST['email'], FILTER_SANITIZE_STRING);
$phone=filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
$pass=filter_var($_POST['password'], FILTER_SANITIZE_STRING);

if (empty($pass)) {
	$password=filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
}else{
	$password= md5($pass);
}

$pr=filter_var($_POST['pr'], FILTER_VALIDATE_INT);

$a=$sql->check('user',['name'=>"$name",'id !'=>"$id"]);
if ($sql->check <1) {
	$sql->update("user",$id,["name"=>"$name","email"=>"$email","phone"=>"$phone",'password'=>"$password",'pr'=>"$pr"]);
header("location:../../../dashbord.php?user=list&add=su");
}else{
	header("location:../../../dashbord.php?user=list&name=no");

}