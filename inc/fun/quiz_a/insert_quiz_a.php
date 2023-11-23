<?php

include"../../sql.php";

$name=filter_var($_POST['name'], FILTER_SANITIZE_STRING);





$a=$sql->check('quiz_a',['name'=>"$name"]);
if ($sql->check <1) {
$sql->insert('quiz_a',["name"=>"$name"]);

header("location:../../../dashbord.php?teac=pre&add=su");

}else{
	header("location:../../../dashbord.php?teac=pre&name=no");
}





