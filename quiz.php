
         <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
 

<div class="card">
  <div class="card-header border-bottom">
    <h2 class="card-title" style="text-align: center;"><?php 


    $id=$_GET['id'];
    $sql->selectall("quiz_a where id=$id  ");
     
     while ($row = $sql->res->fetch_assoc()) {
      $num=$row['num']+1;
     }
    $sql->update('quiz_a',$id,["num"=>"$num"]);
$sql->selectall("quiz_a where id=$id  ");
     
     while ($row = $sql->res->fetch_assoc()) {
      $id_a=$row['id'];
echo $row['name'];

}
$sql->check("quiz_b",["quiz_a"=>"$id"] );
      $num= $sql->check;

     ?></h2>


 
 
 

</div>
<!-- DataTable with Buttons -->
   <br>
   <div class="ajax">
    <table width="100%" class="datatables-basic table border-top">
      <thead>
        <tr>
    
          <center><h4><?php 
          
        $x=0;
        if ($x<$num) {
          $id=$_GET['id'];
$sql->selectall("quiz_b where quiz_a=$id LIMIT 1 offset $x ");
       
     
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


      ?>
      </tr>

<input type="hidden" class="x"  value="<?=$x+1?>">
<input type="hidden" class="id_b"  value="<?=$id_b?>">
<input type="hidden" class="id_a"  value="<?=$id_a?>">
     </tbody>
    </table>
  </div>
  </div>
  <input type="hidden" class="ok" >
<script type="text/javascript">
  var array=[];
  $(".quiz").click(function() {
    var id=$(this).attr("zz");
    var x=$(".x").val();
    var id_b=$(".id_b").val();
    var id_a=$(".id_a").val();
    array.push(id+"*"+id_b)
         console.log(array)
         $(".ok").val(array)
    $.post('inc/fun/quiz/select_quiz.php',
     {ok: id, x: x,id_b:id_b,id_a:id_a,user:<?=$user_id?>},
      function(data) {
        $(".ajax").html(data)
console.log(data)
    });
  });
</script>



<!--/ DataTable with Buttons -->
 <br>
  <br>
            
          </div>
          <!-- / Content -->
    