<?php
include"../../sql.php";

$id=filter_var($_POST['id'], FILTER_VALIDATE_INT);

$a=$sql->check('e_office',['user_id'=>"$id"]);
if ($sql->check !=0) {
header("location:../../../dashbord.php?user=list&delete=no");
exit();
}else{
	
	$sql->delete("user",$id);
header("location:../../../dashbord.php?user=list&delete1=su");
}


