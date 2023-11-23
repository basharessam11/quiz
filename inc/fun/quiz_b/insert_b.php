<?php
include"../../sql.php";
$quiz_a=filter_var($_POST['id'], FILTER_VALIDATE_INT);
$q=filter_var($_POST['q'], FILTER_SANITIZE_STRING);
$name=filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$e=explode(",", $q);


if (empty($quiz_a)) {
	header("location:../../../dashbord.php?school1=list&dd=no&id=$quiz_a");
}else{
	$a=$sql->check('quiz_b',['name'=>"$name"]);
if ($sql->check <1) {
	$sql->insert("quiz_b",["name"=>"$name","quiz_a"=>"$quiz_a"]);

$sql->select('quiz_b',['name'=>"$name"]);
while ($row=$sql->res->fetch_assoc()) {
	$id=$row['id'];
}
for ($i=0; $i <count($e) ; $i++) { 
	$e1=explode("*", $e[$i]);
	$sql->insert("quiz_c",["name"=>"$e1[0]","quiz_b"=>"$id","ok"=>"$e1[1]"]);

}

header("location:../../../dashbord.php?school1=list&add=su&id=$quiz_a");
}else{
 header("location:../../../dashbord.php?school1=list&name=no&id=$quiz_a");

}
}


