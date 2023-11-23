
         <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            

<div class="card">
  <div class="card-header border-bottom">
    <h5 class="card-title" style="float: right;">جميع العناوين</h5>


 
    <button type="button" style="float: left;" class="id btn btn-success" data-bs-toggle="modal" data-bs-target="#basicModal1" >
        اﺿﺎﻓﺔ عنوان
          </button>
 <?php


               if (isset($_GET['delete2'])=='no') {
          echo '<br><br><div id="success-alert2" class="alert alert-danger" role="alert">
        <center>  اﻟﺮﺟﺎء اﺧﺘﻴﺎﺭ اﻟﺒﻴﺎﻧﺎﺕ اﻟﻤﺮاﺩ ﺣﺬﻓﻬﺎ </center>
          </div>';
          }
          if (isset($_GET['name'])=='no') {
          echo '<br><br><div id="success-alert" class="alert alert-danger" role="alert">
 <center> ﻫﺬا اﻻﺳﻢ ﻣﻮﺟﻮﺩﻩ ﺑﺎﻟﻔﻌﻞ </center>
</div>';
          }
           if (isset($_GET['add'])=='su') {
          echo '<br><br><div id="success-alert1" class="alert alert-success" role="alert">
 <center>  ﺗﻢ اﻻﺿﺎﻓﺔ ﺑﻨﺠﺎﺡ</center>
</div>';
          }
                    if (isset($_GET['delete'])=='no') {
          echo '<br><br><div id="success-alert2" class="alert alert-danger" role="alert">
       <center>    ﻻ ﻳﻤﻜﻦ ﺣﺬﻑ ﻫﺬﻩ ﺑﺴﺒﺐ اﻧﻬﺎ ﻣﺪﺧﻠﻪ ﻓﻲ اﺣﺪ اﻟﺠﺪاﻭﻝ</center>
          </div>';
          }
      
           if (isset($_GET['delete1'])=='su') {
          echo '<br><br><div id="success-alert3" class="alert alert-success" role="alert">
<center> ﺗﻢ اﻟﺤﺬﻑ ﺑﻨﺠﺎﺡ</center></div>';
          }
          if (isset($_GET['nam'])=='su') {
          echo '<br><br><div id="success-alert1" class="alert alert-success" role="alert">
<center> ﺗﻢ ﺗﻐﻴﻴﺮ اﺳﻢ اﻟﻤﻮﻗﻊ ﺑﻨﺠﺎﺡ</center>
</div>';
}
          ?>

</div>
<!-- DataTable with Buttons -->
   <br>
    <table id="example" width="100%" class="datatables-basic table border-top">
      <thead>
        <tr>
    
          <th><center>ﺭﻗﻢ</center></th>
          <th><center>اسم الاختبار</center> </th>
          <th><center>عدد الزيارات</center> </th>
          <th><center>عرض واضافة نتائج</center> </th>
         
          <th><center>تعديل</center> </th>
          <th><center>حذف</center></th>
          <th><center>تشغيل وايقاف</center></th>
        </tr>

      </thead>
   <tbody>
          <?php
          
     $sql->selectall("quiz_a  order by id desc");
     $x=1;
     while ($row = $sql->res->fetch_assoc()) {


    ?>
    <tr>
        
        <td><center><?=$x++?></center></td>
      <td><center><?=$row["name"]?></center></td>
      <td><center><?=$row["num"]?></center></td>

 <td><center>
                         
          <a href="dashbord.php?school1=list&id=<?=$row["id"]?>">
         <button type="button" class="btn btn-success">
         
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
</svg>

              </button></a></center></td>

      
<td style="padding: .625rem 0.25rem;"><center>
    
         <button type="button" class="id btn btn-primary" na="<?=$row["name"]?>" t1="<?=$ex[1]?>" d1="<?=$row["d1"]?>" t2="<?=$ex2[1]?>" d2="<?=$row["d2"]?>" ph="<?=$row["img"]?>" besho="<?=$row["id"]?>" data-bs-toggle="modal" data-bs-target="#basicModal" >
        <i class="bx bxs-edit"></i>

              </button></center></td>

     <td><center><button besho="<?=$row["id"]?>" na="<?=$row["name"]?>"  type="button" data-bs-toggle="modal" data-bs-target="#basicModal2" class="id  btn btn-danger" ><i class="bx bxs-trash-alt"></i></button> </center></td>
          <td><center> <label class="switch switch-sm pe-4"> <input type="checkbox" <?php

if ($row['ok']==1) {
  echo"checked";
}          ?> ok="<?=$row["id"]?>" a="on1<?=$row["id"]?>"  value="1" class="on on1<?=$row["id"]?> switch-input" > <span class="switch-toggle-slider"> <span class="switch-on"></span> <span class="switch-off"></span> </span> </label> </center></td>

      </tr>
<?php
     }


      ?>

     </tbody>
    </table>
  </div>



<!-- groub update -->
          <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" style="max-width: 70rem" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">تعديل العنوان الرئيسي</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
<form method="post" action="inc/fun/quiz_a/update_quiz_a.php" enctype="multipart/form-data">

                    <div class="col mb-3">
                      <label for="nameBasic" class="form-label">العنوان :</label>
                      <input type="text" id="nameBasic" class="na form-control" name="name" required=""  placeholder="Name">
                
                    </div>
                   



            


                 </div>
                 
                </div>

                <input class="zz" type="hidden" name="id">

                <div class="modal-footer">
                  <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">اغلاق</button>
                  <button type="submit" class="btn btn-primary">حفظ</button>
</form>
                </div>
              </div>
            </div>
          </div>
<!-- updat -->
   <script>
  $(".id").click(function(){
      var na=$(this).attr('na'); 


      var id=$(this).attr('besho');

      $('.zz').val(id);
      $(".na").val(na);

      
  })




  $(".on").click(function() {
   var a=$(this).attr('a');
   
    var ok=$('.'+a+':checked').val()
    var id=$('.'+a).attr("ok")
$.post('inc/fun/quiz_a/on.php', {id: id ,ok:ok}, function(data) {

});
  
  });
</script>




      <!-- group insert -->
          <div class="modal fade" id="basicModal1" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" style="max-width: 70rem" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">اضافة عنوان رئيسي</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
<form method="post" action="inc/fun/quiz_a/insert_quiz_a.php" enctype="multipart/form-data">
                                 <div class="col mb-3">
                      <label for="nameBasic" class="form-label">العنوان :</label>
                      <input type="text" id="nameBasic" class=" form-control" name="name" required=""  placeholder="Name">
                
                    </div>
                   




            


                 </div>
                 
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">اغلاق</button>
                  <button type="submit" class="btn btn-primary">حفظ</button>
</form>
                </div>
              </div>
            </div>
          </div>


 <!-- group delete -->
          <div class="modal fade" id="basicModal2" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">حذف</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
<form method="post" action="inc/fun/quiz_a/delete_quiz_a.php">
                    <div id="name" class=" col mb-3">
                        
                      
                      
                    </div>
                    <input class="zz" type="hidden" name="id">
                  </div>
                 
                 
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-danger">Delete</button>
</form>
                </div>
              </div>
            </div>
          </div>
<!--/ DataTable with Buttons -->
 <br>
  <br>
            
          </div>
          <!-- / Content -->
    