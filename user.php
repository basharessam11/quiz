        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            

<div class="card">
  <div class="card-header border-bottom">
    <h5 class="card-title" style="float: right;">اﻟﻤﺴﺘﺨﺪﻣﻴﻦ</h5>


    <button type="button" style="float: left;" class="id btn btn-success" data-bs-toggle="modal" data-bs-target="#basicModal1" >
         اﺿﺎﻓﺔ ﻣﺴﺘﺨﺪﻣﻴﻦ
          </button>
          <?php
          if (isset($_GET['name'])=="no") {
          echo '<br><br><div id="success-alert" class="alert alert-danger" role="alert">
  ﻫﺬا اﻻﺳﻢ ﻣﻮﺟﻮﺩﻩ ﺑﺎﻟﻔﻌﻞ
</div>';
          }
           if (isset($_GET['add'])=="su") {
          echo '<br><br><div id="success-alert1" class="alert alert-success" role="alert">
  ﺗﻢ اﻻﺿﺎﻓﺔ ﺑﻨﺠﺎﺡ
</div>';
          }
                    if (isset($_GET['delete'])=="no") {
          echo '<br><br><div id="success-alert2" class="alert alert-danger" role="alert">
          ﻻ ﻳﻤﻜﻦ ﺣﺬﻑ ﻫﺬﻩ ﺑﺴﺒﺐ اﻧﻬﺎ ﻣﺪﺧﻠﻪ ﻓﻲ اﺣﺪ اﻟﺠﺪاﻭﻝ
          </div>';
          }
           if (isset($_GET['delete1'])=="su") {
          echo '<br><br><div id="success-alert3" class="alert alert-success" role="alert">
ﺗﻢ اﻟﺤﺬﻑ ﺑﻨﺠﺎﺡ</div>';
          }
          ?>

</div>
<!-- DataTable with Buttons -->
   <br>
    <table id="example" width="100%" class="datatables-basic table border-top">
      <thead>
        <tr>
    
          <th><center>رقم</center></th>
          <th><center>اﺳﻢ اﻟﻤﺴﺘﺨﺪﻡ</center> </th>
          <th><center>اﻟﺼﻼﺣﻴﺔ</center> </th>
          <th><center>اﻟﺘﺤﻜﻢ</center> </th>
        </tr>

      </thead>
   <tbody>
          <?php
     $sql->selectall('user ORDER BY id DESC ');
     $x=1;
     while ($row = $sql->res->fetch_assoc()) {
      if ($row["pr"]==1) {
       $a="ﻣﺪﻳﺮ";
      }elseif ($row["pr"]==2) {
        $a="مستخدم";
      }
      echo '<tr>
        
        <td><center>'.$x++.'</center></td>
      <td><center>'.$row["name"].'</center></td>
      <td><center>'.$a.'</center></td>
      <td><center><button type="button" class="id btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal" besho="'.$row["id"].'" pass="'.$row["password"].'" na="'.$row["name"].'" pr="'.$row["pr"].'" em="'.$row["email"].'" ph="'.$row["phone"].'">
          تعديل
          </button>
          <button type="button" class="id btn btn-danger" data-bs-toggle="modal" data-bs-target="#basicModal2" besho="'.$row["id"].'" >
          حذف
          </button></center></td>
        
      </tr>';
     }


      ?>

     </tbody>
    </table>
  </div>



 <!-- groub update -->
          <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">تعديل المستخدم</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="اغلاق"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
<form method="post" action="inc/fun/user/update_user.php">

                    <div class="col mb-3">
                      <label for="nameBasic" class="form-label">اسم المستخدم</label>
                      <input type="text" id="nameBasic" class="na form-control" name="name" required=""  placeholder="اسم المستخدم">
                      
                    </div>
                                       <div class="col mb-3">
                      <label for="nameBasic" class="form-label">البريد الالكتروني</label>
                      <input type="text" id="nameBasic" class="em form-control" name="email" required=""  placeholder="البريد الالكتروني">
                      
                    </div>
                                        <div class="col mb-3">
                      <label for="nameBasic" class="form-label">الجوال</label>
                      <input type="text" id="nameBasic" class="ph form-control" name="phone" required=""  placeholder="الجوال">
                      
                    </div>

                  
                      <div class="col mb-3">
                      <label for="nameBasic" class="form-label">ﻛﻠﻤﺔ اﻟﻤﺮﻭﺭ</label>
                      <input type="text" id="nameBasic" class=" form-control" name="password"  placeholder="كلمة المرور">
                   
                    </div>
<input type="hidden" id="nameBasic" class="pass form-control" name="password" required="" placeholder="كلمة المرور">
                     <div class="col mb-3">
                      <label for="nameBasic" class="form-label">اﻟﺼﻼﺣﻴﺔ</label>
                       <select name="pr"  class="pr form-select" required >
                     <option value="1">ﻣﺪﻳﺮ</option>
                     <option value="2">مستخدم</option>
                    
                     
          </select>
                   
                    </div>
                  </div>
                 <input class="zz" type="hidden" name="id">
                 
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">اغلاق</button>
                  <button type="submit" class="btn btn-primary">حفظ</button>
</form>
                </div>
              </div>
            </div>
          </div>
     <script type="text/javascript">
  $(".id").click(function() {
    var id=$(this).attr("besho");
    var na=$(this).attr("na");
    var pass=$(this).attr("pass");
    var pr=$(this).attr("pr");
    var em=$(this).attr("em");
    var ph=$(this).attr("ph");
console.log(id,na,pass,pr)
    $(".zz").val(id);
    $(".na").val(na);
    $(".pass").val(pass);
    $(".pr").val(pr);
    $(".em").val(em);
    $(".ph").val(ph);
  });
 
</script>


      <!-- group insert -->
          <div class="modal fade" id="basicModal1" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">اضافة مستخدم</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="اغلاق"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
<form method="post" action="inc/fun/user/insert_user.php">
                                        <div class="col mb-3">
                      <label for="nameBasic" class="form-label">اسم المستخدم</label>
                      <input type="text" id="nameBasic" class=" form-control" name="name" required=""  placeholder="اسم المستخدم">
                      
                    </div>
                                       <div class="col mb-3">
                      <label for="nameBasic" class="form-label">البريد الالكتروني</label>
                      <input type="text" id="nameBasic" class=" form-control" name="email" required=""  placeholder="البريد الالكتروني">
                      
                    </div>
                                        <div class="col mb-3">
                      <label for="nameBasic" class="form-label">الجوال</label>
                      <input type="text" id="nameBasic" class="form-control" name="phone" required=""  placeholder="الجوال">
                      
                    </div>

                      <div class="col mb-3">
                      <label for="nameBasic" class="form-label">ﻛﻠﻤﺔ اﻟﻤﺮﻭﺭ</label>
                      <input type="text" id="nameBasic" class="form-control" name="password" required="" placeholder="كلمة المرور">
                   
                    </div>

                     <div class="col mb-3">
                      <label for="nameBasic" class="form-label">اﻟﺼﻼﺣﻴﺔ</label>
                       <select name="pr"  class="form-select" required >
            <option>اﻟﺮﺟﺎء اﻻﺧﺘﻴﺎﺭ</option>
                     <option value="1">ﻣﺪﻳﺮ</option>
                     <option value="2">مستخدم</option>
          </select>
                   
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
                  <h5 class="modal-title" id="exampleModalLabel1">حذف المستخدم</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="اغلاق"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
<form method="post" action="inc/fun/user/delete_user.php">
                    <div id="name" class=" col mb-3">
                      
                      
                    </div>
                    <input class="zz" type="hidden" name="id">
                  </div>
                 
                 
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">اغلاق</button>
                  <button type="submit" class="btn btn-danger">حذف</button>
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