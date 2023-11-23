
         <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            <div class="row g-4 mb-4">
<div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>اﻻﺟﺎﺑﺎﺕ اﻟﺼﺤﻴﺤﺔ</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2"><?php

    $sql->selectsum("yes","report","user_id=$user_id");
   
 while ($row6=$sql->res_sum->fetch_assoc()) {
                      echo$row6['SUM(yes)'];
                      if (empty($row6['SUM(yes)'])) {
                       echo 0 ;
                      }else{
                         echo$row6['SUM(no)'];
                      }
                      }

     ?></h4>
            </div>
            <small>ﺟﻤﻴﻊ اﻻﺟﺎﺑﺎﺕ اﻟﺼﺤﻴﺤﺔ</small>
          </div>
          <span class="badge bg-label-success rounded p-2">
            <i class="bx bx-group bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>اﻻﺟﺎﺑﺎﺕ اﻟﻐﻴﺮ ﺻﺤﻴﺤﺔ</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2"><?php

    $sql->selectsum("no","report","user_id=$user_id");
   
 while ($row6=$sql->res_sum->fetch_assoc()) {
                     
                      if (empty($row6['SUM(no)'])) {
                       echo 0 ;
                      }else{
                         echo$row6['SUM(no)'];
                      }
                      }

     ?></h4>
            </div>
            <small>ﺟﻤﻴﻊ اﻻﺟﺎﺑﺎﺕ اﻟﻐﻴﺮ ﺻﺤﻴﺤﺔ</small>
          </div>
          <span class="badge bg-label-success rounded p-2">
            <i class="bx bx-group bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>

<div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>اﻻﺳﺌﻠﺔ اﻟﺘﻲ ﻗﻤﺖ ﺑﻬﺎ</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2"><?php

    $sql->selectsum("num_b","report","user_id=$user_id");
   
 while ($row6=$sql->res_sum->fetch_assoc()) {
                      echo$row6['SUM(num_b)'];
                      if (empty($row6['SUM(num_b)'])) {
                       echo 0 ;
                      }else{
                         echo$row6['SUM(no)'];
                      }
                      }

     ?></h4>
            </div>
            <small>ﺟﻤﻴﻊ اﻻﺳﺌﻠﺔ اﻟﺘﻲ ﻗﻤﺖ ﺑﻬﺎ</small>
          </div>
          <span class="badge bg-label-success rounded p-2">
            <i class="bx bx-group bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>اﻻﺧﺘﺒﺎﺭا اﻟﺘﻲ ﻗﻤﺖ ﺑﻬﺎ</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2"><?php

    $sql->selectall("report where ok=1 and user_id=$user_id");
    echo $sql->res->num_rows;

      
     ?></h4>
            </div>
            <small>ﺟﻤﻴﻊ اﻻﺧﺘﺒﺎﺭا اﻟﺘﻲ ﻗﻤﺖ ﺑﻬﺎ</small>
          </div>
          <span class="badge bg-label-success rounded p-2">
            <i class="bx bx-group bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>

  

<div class="card">
  <div class="card-header border-bottom">
    <h5 class="card-title" style="float: right;">ﺟﻤﻴﻊ اﻻﺧﺘﺒﺎﺭاﺕ</h5>


 

 <?php

           if (isset($_GET['add'])=='su') {
          echo '<br><br><div id="success-alert1" class="alert alert-success" role="alert">
 <center>  ﺗﻢ اﻻﺿﺎﻓﺔ ﺑﻨﺠﺎﺡ</center>
</div>';
          }

          ?>

</div>
<!-- DataTable with Buttons -->
 
    <table width="100%" class="datatables-basic table border-top">
      <thead>
        <tr>
    
          <th><center>ﺭﻗﻢ</center></th>
          <th><center>اﺳﻢ اﻻﺧﺘﺒﺎﺭ</center></th>

          <th><center>ﻋﺮﺽ اﻻﺳﺌﻠﺔ</center></th>

        </tr>

      </thead>
   <tbody>
          <?php



 $sql->select1("quiz_a"," order by id desc");
     $x=1;
     while ($row = $sql->res1->fetch_assoc()) {
            
$id =$row['id'];


 $ok=$row['ok'];




    ?>
    <tr>
        
        <td><center><?=$x++?></center></td>
      <td><center><?=$row["name"]?></center></td>

 <td><center>
                  <?php

$sql->check("report",["quiz_a"=>"$id","user_id"=>"$user_id"]);
              
                 if ($sql->check<1 and $ok==1) {
                
                 
?>
          <a href="dashbord.php?quiz=list&id=<?=$id?>">
         <button type="button" class="btn btn-success">
         
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
</svg>

              </button></a>
              <?php
              
}else{
  echo "ﻏﻴﺮ ﻣﺘﻮﻓﺮ";
}

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
    <?php

    ?>