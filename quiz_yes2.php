
         <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            

<div class="card">
  <div class="card-header border-bottom">
    <h5 class="card-title" style="float: right;">جميع الاجابات الصحيحة جميع الايام</h5>


</div>
<!-- DataTable with Buttons -->
   <br>
    <table id="example" width="100%" class="datatables-basic table border-top">
      <thead>
        <tr>
    
          <th><center>ﺭﻗﻢ</center></th>
          <th><center>اسم المستخدم </center> </th>
          <th><center>البريد الالكتروني</center> </th>
          <th><center>الجوال</center> </th>
          <th><center>عدد الاسئلة</center> </th>
          <th><center>عدد الاجابات الصحيحة</center> </th>
        </tr>

      </thead>
   <tbody>
          <?php
        $date=date("d");
$x=1;

                  $sql->selectall("report" );
                    
     while ($row = $sql->res->fetch_assoc()) {
        $num_b=$row['num_b'];
        $yes=$row['yes'];

      if ($row['yes']==$row['num_b']) {
        $user=$row['user_id'];
        $sql->select1('user',"where id=$user");
        
         while ($row1 = $sql->res1->fetch_assoc()) {
   
      
     
       

            

 

    ?>
    <tr>
        
        <td><center><?=$x++?></center></td>
      <td><center><?=$row1["name"]?></center></td>
      <td><center><?=$row1["email"]?></center></td>
      <td><center><a href="tel:<?=$row1["phone"]?>"><?=$row1["phone"]?></a></center></td>
     <td><center><?=$num_b?></center></td>
     <td><center><?=$yes?></center></td>
      </tr>
<?php
     }
     
     
      }
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
    