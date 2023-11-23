<?php

include"../../sql.php";
error_reporting(0);
$id=filter_var($_POST['id'], FILTER_VALIDATE_INT);
$ok=filter_var($_POST['ok'], FILTER_VALIDATE_INT);

if (empty($ok)) {
$sql->update("quiz_a",$id,['ok'=>0]);

}else{
	$sql->update("quiz_a",$id,['ok'=>1]);
	
}



