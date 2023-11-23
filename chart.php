<?php

          if (isset($_GET['nam'])=="su") {
          echo '<br><br><div id="success-alert" class="alert alert-success" role="alert">
  <center>تم تغيير الاسم بنجاح</center>
</div>';
          }

?>
          <div class="container-xxl flex-grow-1 container-p-y">
<div class="row g-4 mb-4">
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>عدد المشاركين</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2"><?php
    $sql->selectall('report');
     
    echo $sql->res->num_rows;

      
     ?></h4>
           
            </div>
            <small>جميع المشاركين </small>
          </div>
          <span class="badge bg-label-primary rounded p-2">
            <i class="bx bx-user bx-sm"></i>
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
            <span> المشاركين اليوم</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2"><?php
              $date=date('d');
    $sql->selectall("report where date=$date");
     
    echo $sql->res->num_rows;

      
     ?></h4>
            </div>
            <small>جميع المشاركين اليوم</small>
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
            <span>عدد الاسئلة</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2"><?php
             
    $sql->selectall("quiz_b");
     
    echo $sql->res->num_rows;

      
     ?></h4>
            </div>
            <small>جميع الاسئلة</small>
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
            <span>المستخدمين</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2"><?php

    $sql->selectall("user");
    echo $sql->res->num_rows;

      
     ?></h4>
            </div>
            <small>جميع المستخدمين</small>
          </div>
          <span class="badge bg-label-success rounded p-2">
            <i class="bx bx-group bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>



 <div class="col-sm-12 col-xl-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js'></script>
<script>
    $(document).ready(function() {
        var ctx = $("#chart-line");
        var myLineChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [    <?php


                  $sql->selectall("report where date=$date  " );
     
     while ($row = $sql->res->fetch_assoc()) {
      if ($row['yes']==$row['num_b']) {
        $user=$row['user_id'];
        $sql->select1('user',"where id=$user");
        if ($x!=4) {
         while ($row1 = $sql->res1->fetch_assoc()) {
      echo '"'.$row1['name'].'",';
      $x++;
     }
        }
     
     
      }
     }

     
     ?>  
],
                datasets: [{
                    data: [
    <?php

for ($i=0; $i <$x ; $i++) { 
  echo $x.",";
}
     
    

     
     ?> 
                    ],
                    backgroundColor: ["rgba(255, 0, 0, 0.5)", "rgba(100, 255, 0, 0.5)", "rgba(200, 50, 255, 0.5)", "rgba(0, 100, 255, 0.5)"]
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'اول 4 الاشخاص  تم الاجابة عن الاسئلة بشكل صحيح اليوم'
                }
            }
        });
    });
</script>

                        <div class="card-body col-sm-12 col-md-12 col-xl-12" style="position: relative;">
                            <div class="chartjs-size-monitor" style="position: relative; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                </div>
                            </div> <canvas id="chart-line" width="299" height="200" class="chartjs-render-monitor" style="display: block; width: 299px; height: 200px;"></canvas>
                        </div>
 
        </div>
      </div>
    </div>
  </div>

                    

 <div class="col-sm-12 col-md-6 col-xl-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js'></script>
<script>
    $(document).ready(function() {
        var ctx = $("#chart-line1");
        var myLineChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["عدد الاسئلة اليوم","عدد الاجابات الصحيحة"
],
                datasets: [{
                    data: [
                                       
  <?php
  $n=0;
                  $sql->selectall("report where date=$date ");
     echo $sql->res->num_rows.',';

  $sql->selectall("report where date=$date ");
     
     while ($row = $sql->res->fetch_assoc()) {
      if ($row['yes']==$row['num_b']) {
     $n++;
        
      
   
      }

     }
     echo $n;
     ?>  
                    ],
                    backgroundColor: ["rgba(255, 0, 0, 0.5)", "rgba(100, 255, 0, 0.5)", "rgba(200, 50, 255, 0.5)", "rgba(0, 100, 255, 0.5)"]
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'تقارير اسئلة اليوم'
                }
            }
        });
    });
</script>

                        <div class="card-body col-sm-12 col-md-12 col-xl-12" style="position: relative;">
                            <div class="chartjs-size-monitor" style="position: relative; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                </div>
                            </div> <canvas id="chart-line1" width="299" height="200" class="chartjs-render-monitor" style="display: block; width: 299px; height: 200px;"></canvas>
                        </div>
        </div>
      </div>
    </div>
  </div>


</div>
</div>
