<?php
error_reporting(0);
session_start();
if (!isset($_SESSION['login'])) {
header("location:index.php");
}else{
include "inc/des/header.php";

include "inc/des/menu.php";
$log=$_SESSION['login'];
$sql->selectall("user where name = '$log'");
while ($row = $sql->res->fetch_assoc()) {
$pr=$row['pr'];
}
if ($pr==1) {
  if (isset($_GET)) {
  //customer

      if ($_GET['user']=="list") {
    include "user.php";
  }
  
      if ($_GET['dash']=="list") {
    include "chart.php";
  }
      if ($_GET['quiz_yes1']=="list") {
    include "quiz_yes1.php";
  }
        if ($_GET['quiz_yes2']=="list") {
    include "quiz_yes2.php";
  }
        if ($_GET['quiz_yes3']=="list") {
    include "quiz_yes3.php";
  }
    if ($_GET['teac']=="pre") {
    include "quiz_a.php";
  }


 
    if ($_GET['school1']=="list") {
    include "quiz_b.php";
  }


}
}elseif ($pr==2) { 




  if ($_GET['office']=="list") {
    include "quiz3.php";
  }

  if ($_GET['quiz']=="list") {
    include "quiz.php";
  }

          if ($_GET['quiz_yes3']=="list") {
    include "quiz_yes3.php";
  }

    if ($_GET['user']=="edit") {
    include "user_edit.php";
  }

}

include "inc/des/footer.php";
}







?>