<?php

include"../../sql.php";

$id=filter_var($_POST['id'], FILTER_VALIDATE_INT);
$name=filter_var($_POST['name'], FILTER_SANITIZE_STRING);

$a=$sql->check('quiz_a',['name'=>"$name",'id !'=>"$id"]);
if ($sql->check <1) {

$sql->update('quiz_a',$id,["name"=>"$name"]);


 header("location:../../../dashbord.php?teac=pre&add=su");
}else{
	header("location:../../../dashbord.php?teac=pre&name=no");
}


