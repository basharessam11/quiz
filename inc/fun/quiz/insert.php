<?php
include"../../sql.php";
$get=filter_var($_GET['get'], FILTER_SANITIZE_STRING);
$user_id=filter_var($_GET['user'], FILTER_VALIDATE_INT);
$id_a=filter_var($_GET['id_a'], FILTER_VALIDATE_INT);
$ex=explode(",", $get);
echo$date=date('d');
print_r($ex);

$num=0;
$min=0;

for ($i=0; $i <count($ex) ; $i++) { 

	$ex1=explode("*", $ex[$i]);

	$sql->selectall("quiz_c where quiz_b=$ex1[1] and id=$ex1[0]");

     while ($row = $sql->res->fetch_assoc()) {
      
    $ok=$row['ok'];
      if ($ok==1) {
      	$num++;
      }else{
      	$min++;
      }

}

        }
         $sql->check("quiz_b",["quiz_a"=>"$id_a"] );
        $num1= $sql->check;

$sql->insert('report',["user_id"=>"$user_id","quiz_a"=>"$id_a","num_b"=>"$num1","yes"=>"$num","no"=>"$min","ok"=>"1","date"=>"$date"]);

$x=0;
  $sql->selectall("report where user_id=$user_id and num_b=yes");
     while ($row = $sql->res->fetch_assoc()) {
      $x++;
     }
 $sql->update('user',$user_id,["yes"=>"$x"]);

header("location:../../../dashbord.php?office=list&add=su");