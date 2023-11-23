<?php
include"../../sql.php";
$id_b=filter_var($_POST['id_b'], FILTER_VALIDATE_INT);
$quiz_a=filter_var($_POST['id'], FILTER_VALIDATE_INT);

$q=filter_var($_POST['q'], FILTER_SANITIZE_STRING);

$name=filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$e=explode(",", $q);

print_r($e);
if (empty($quiz_a)) {
	 header("location:../../../dashbord.php?school1=list&dd=no&id=$quiz_a");
}else{
	$a=$sql->check('quiz_b',['name'=>"$name",'id !'=>"$id_b"]);
if ($sql->check <1) {
	$sql->update("quiz_b",$id_b,["name"=>"$name","quiz_a"=>"$quiz_a"]);


	echo$x=0;

	
	$sql->select1("quiz_c" ,"where quiz_b = $id_b");

	while ($row=$sql->res1->fetch_assoc()) {
		$e2=explode("*", $e[$x]);
		$id_c=$row['id'];
		
		$sql->update("quiz_c",$id_c,["name"=>"$e2[0]","quiz_b"=>"$id_b","ok"=>"$e2[1]"]);
		$x++;
	

                                        
	

}

 header("location:../../../dashbord.php?school1=list&add=su&id=$quiz_a");
}else{
  header("location:../../../dashbord.php?school1=list&name=no&id=$quiz_a");

}
}


