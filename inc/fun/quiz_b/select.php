  <?php
   include"../../sql.php";
          $id=filter_var($_POST['id'], FILTER_VALIDATE_INT);
          $array=[];
          $array1=[];
     $sql->selectall("quiz_c where quiz_b=$id ");
     $x=1;
     while ($row = $sql->res->fetch_assoc()) {
      $q_b=$row['id'];
       array_push($array1, $q_b);
     	$q1=$row['name']."*".$row['ok'];
     array_push($array, $q1);
  $ok=$row['ok'];
  if ($ok==1) {
  	$ok1="الاجابة صحيحة";

  }else{
  	$ok1="الاجابة خاطئة";
  }
      $xx=$x++;
       echo '<tr class="a'.$xx.'"><td><center>'.$xx.'</center></td><td><center>'.$row['name'].'</center></td><td><center>'.$ok1.'</center></td><td><center><button   type="button" onclick="del('.$xx.')" class="dd'.$xx.'  btn btn-danger" z="'.$xx.'" delete="'.$q1.'"><i class="bx bxs-trash-alt"></i></button> </center></td></tr>';
      }
     
  

      ?>
      <script type="text/javascript">
      	var array=<?php echo json_encode($array); ?>;
          var x=<?=count($array)?>
          
       
      
    </script>
      </script>