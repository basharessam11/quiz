
         <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            

<div class="card">
  <div class="card-header border-bottom">
    <h5 class="card-title" style="float: right;">المركز</h5>


</div>
<!-- DataTable with Buttons -->
   
    <table  width="100%" class="datatables-basic table border-top">
      <thead>
        <tr>
    
          <th><center>ﺭﻗﻢ</center></th>
          <th><center>اسم المستخدم </center> </th>


          <th><center>عدد الاجابات الصحيحة</center> </th>
        </tr>

      </thead>
   <tbody>
          <?php
        $date=date("d");
$x=1;

                  $sql->selectall("user where pr!=1 ORDER BY yes DESC" );
                    
     while ($row = $sql->res->fetch_assoc()) {

    ?>
    <tr>
        
        <td><center><?=$x++?></center></td>
      <td><center><?=$row["name"]?></center></td>
      
     <td><center><?php
 $user=$row['id'];
        $sql->select1('report',"where user_id=$user and num_b=yes");
        
       echo $sql->res1->num_rows;
     ?></center></td>
  
      </tr>
<?php
     
     
     
      }
     


      ?>

     </tbody>
    </table>
  </div>


<!--/ DataTable with Buttons -->
 <br>
  <br>
            
          </div>
          <!-- / Content -->
    