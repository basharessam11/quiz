
<table width="100%" class="datatables-basic table border-top">
      <thead>
        <tr>
    
          <center><h4><?php 
          include"../../sql.php";
          $array=[];
          array_push($array, $_POST['ok']);
         
         $x=filter_var($_POST['x'], FILTER_VALIDATE_INT);
          $id_b=filter_var($_POST['id_b'], FILTER_VALIDATE_INT);
           $user=filter_var($_POST['user'], FILTER_VALIDATE_INT);
          $id_a=filter_var($_POST['id_a'], FILTER_VALIDATE_INT);
          $sql->check("quiz_b",["quiz_a"=>"$id_a"] );
        $num= $sql->check;
        
        if ($x<$num) {
         
$sql->selectall("quiz_b where quiz_a=$id_a LIMIT 1 offset $x ");
       
     
     while ($row = $sql->res->fetch_assoc()) {
      
      $id_b=$row['id'];
echo $row['name'];
}
        }

 
   
     ?></h4></center>
          
        </tr>

      </thead>
   <tbody>
<br>
    <br>
    <tr>
                <?php
          if ($x<$num) {
     $sql->selectall("quiz_c where quiz_b = $id_b limit 2 ");
  
     while ($row = $sql->res->fetch_assoc()) {
            

 

    ?>
<td><center><input class="quiz form-control btn btn-primary" zz="<?=$row['id']?>" type="button" value="<?=$row['name']?>" name=""></center></td>

<?php
     }


      ?>
      </tr>
          <tr>
                <?php
           
     $sql->selectall("quiz_c where quiz_b = $id_b limit 2 offset 2 ");
     
     while ($row = $sql->res->fetch_assoc()) {
            

 

    ?>
<td><center><input class="quiz form-control btn btn-primary" type="button" zz="<?=$row['id']?>" value="<?=$row['name']?>" name=""></center></td>

<?php
     }
}
$x++;
      ?>
      </tr>


     </tbody>
    </table>
    <input type="hidden" class="x"  value="<?=$x?>">
<input type="hidden" class="id_b"  value="<?=$id_b?>">
<input type="hidden" class="id_a"  value="<?=$id_a?>">

<input type="hidden" class="ok" >

<script type="text/javascript">
  
  $(".quiz").click(function() {
    var id=$(this).attr("zz");
    var x=$(".x").val();
    var id_b=$(".id_b").val();
    var id_a=$(".id_a").val();
  
        array.push(id+"*"+id_b)
         console.log(array)
         $(".ok").val(array)
         console.log(id,id_b,id_a,x)
    if (x==<?=$num?>) {
      location.href = 'inc/fun/quiz/insert.php?get='+array+'&user='+<?=$user?>+'&id_a='+id_a;
    }
    $.post('inc/fun/quiz/select_quiz.php',
     {ok: id, x: x,id_b:id_b,id_a:id_a,user:<?=$user?>},
      function(data) {
        $(".ajax").html(data)
console.log(data)
    });
  });
</script>
