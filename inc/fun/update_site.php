
<?php
include"../sql.php";

$id=filter_var(1, FILTER_VALIDATE_INT);
$name=filter_var($_POST['name'], FILTER_SANITIZE_STRING);

	$sql->update("name",$id,["name"=>"$name"]);
header("location:../../dashbord.php?dash=list&nam=su");
