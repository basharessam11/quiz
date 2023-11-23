<?php
include"../../sql.php";
$id=filter_var($_POST['id'], FILTER_VALIDATE_INT);


if (empty($id)) {
header("location:../../../dashbord.php?teac=pre&delete2=no");
}else{

$sql->select("quiz_a","where id =$id");
while ($row=$sql->res->fetch_assoc()) {
	$id_a=$row['id'];
	

//delete quiz_b
$sql->select("quiz_b","where quiz_a =$id_a");
while ($row1=$sql->res->fetch_assoc()) {
	$id_b=$row1['id'];

	$sql->select1("quiz_c","where quiz_b =$id_b");
while ($row3=$sql->res1->fetch_assoc()) {
	$id_c=$row3['id'];
	$sql->delete("quiz_c",$id_c);
	
	}
	$sql->delete("quiz_b",$id_b);

	}

	}
	$sql->delete("quiz_a",$id);
header("location:../../../dashbord.php?teac=pre&delete1=su");
	
	


}
