<?php
include"../../sql.php";
$id=filter_var($_POST['id'], FILTER_VALIDATE_INT);
$id_a=filter_var($_POST['id_a'], FILTER_VALIDATE_INT);

if (empty($id)) {
header("location:../../../dashbord.php?school1=list&delete2=no&id=$id_a");
}else{

$sql->select("quiz_c","where quiz_b =$id");
while ($row=$sql->res->fetch_assoc()) {
	$id_c=$row['id'];
$sql->delete("quiz_c",$id_c);

	}
	$sql->delete("quiz_b",$id);
header("location:../../../dashbord.php?school1=list&delete1=su&id=$id_a");
	
}
	



