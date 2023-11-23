        <!-- Content -->
  
          <div class="container-xxl flex-grow-1 container-p-y">
            
            

<div class="card">
  <div class="card-header border-bottom">
    <h5 class="card-title" style="float: right;">الاسئلة</h5>


    <button type="button" style="float: left;" class="id btn btn-success" data-bs-toggle="modal" data-bs-target="#basicModal1" >
         اﺿﺎﻓﺔ سؤال
          </button>
          <?php
          if (isset($_GET['name'])=="no") {
          echo '<br><br><div id="success-alert" class="alert alert-danger" role="alert">
  ﻫﺬا اﻻﺳﻢ ﻣﻮﺟﻮﺩﻩ ﺑﺎﻟﻔﻌﻞ
</div>';
          }
                    if (isset($_GET['dd'])=="no") {
          echo '<br><br><div id="success-alert" class="alert alert-danger" role="alert">
 عذرا لا يوجد id
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
          <th><center>السؤال</center> </th>
          <th><center>تعديل</center> </th>
          <th><center>حذف</center> </th>
        </tr>

      </thead>
   <tbody>
          <?php
          $id=$_GET['id'];
     $sql->selectall("quiz_b where quiz_a=$id ORDER BY id DESC ");
     $x=1;
     while ($row = $sql->res->fetch_assoc()) {

      echo '<tr>
        
        <td><center>'.$x++.'</center></td>
      <td><center>'.$row["name"].'</center></td>
      
      <td><center><button type="button" class="id btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal" besho="'.$row["id"].'" n="'.$row["name"].'">
          تعديل
          </button></center></td>
<td><center>
          <button type="button" class="id btn btn-danger" data-bs-toggle="modal" data-bs-target="#basicModal2" besho="'.$row["id"].'" na="'.$row["name"].'">
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
                  <h5 class="modal-title" id="exampleModalLabel1">تعديل السؤال</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="اغلاق"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
<form method="post" action="inc/fun/quiz_b/update_b.php">


                    <div class="col mb-3">
                      <label for="nameBasic" class="form-label">السؤال</label>
                      <input type="text" id="nameBasic" class="na form-control" name="name"  required="" placeholder="الاسم">
                    </div>


                       <div class="col mb-3">
                      <label for="nameBasic" class="form-label">الاجابة</label>
                      <input type="text" id="nameBasic" class="q2 form-control"  placeholder="الاسم">
                    </div>
                     <label class="form-check-label" for="flexRadioDefault1">
    هل الاجابة صحيحة :
  </label>
                    <div class="col mb-3">
                     <input class="q3 form-check-input" value="1" type="radio" name="ok" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    نعم
  </label>

                     <input class="q3 form-check-input" value="0" type="radio" name="ok" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
   لا
  </label>
                    </div>

                                        <div class="col mb-3">
                      <br>
                      <input type="button" onclick="add(2,3)" value="اضافة" class="add form-control btn btn-success">
                    </div>
                
                  </div>
                  <br>
                      <table id="example" width="100%" class="datatables-basic table border-top">
      <thead>
        
        <tr>
   
          <th><center>رقم</center></th>
          <th><center>الاجابة</center> </th>
          <th><center>الحالة</center> </th>
          <th><center>حذف</center> </th>
        </tr>

      </thead>
   <tbody class="table2">


     </tbody>
    </table>
 
                 <input type="hidden" class="id1" name="id_b">
                 
                 <input type="hidden" class="array1" name="q">
                  <input type="hidden" value="<?=$_GET['id']?>" name="id">
                </div>
                <div class="modal-footer">
                  <button type="button" class="close btn btn-label-secondary" data-bs-dismiss="modal">اغلاق</button>
                  <button type="submit" class="btn btn-primary">حفظ</button>
</form>
                </div>
              </div>
            </div>
          </div>
                       <script type="text/javascript">
                    $(".id").click(function() {
                      var name=$(this).attr("n");
                      var id=$(this).attr("besho");
                      $(".na").val(name);
                      $(".id1").val(id);


                     
                    });
$(".id").on("click", function() {
          var id=$(this).attr('besho');

    $.post('inc/fun/quiz_b/select.php' , {

  
      id : id
     

    } , function(data){
     $(".table2").html(data)
     
      $(".array1").val(array)
    });


  });
                  </script> 


      <!-- group insert -->
          <div class="modal fade" id="basicModal1" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">اضافة سؤال</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="اغلاق"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
<form method="post" action="inc/fun/quiz_b/insert_b.php">
                   

                    <div class="col mb-3">
                      <label for="nameBasic" class="form-label">السؤال</label>
                      <input type="text" id="nameBasic" class="form-control" name="name"  required="" placeholder="الاسم">
                    </div>


                       <div class="col mb-3">
                      <label for="nameBasic" class="form-label">الاجابة</label>
                      <input type="text" id="nameBasic" class="q1 form-control" required="" placeholder="الاسم">
                    </div>
                     <label class="form-check-label" for="flexRadioDefault1">
    هل الاجابة صحيحة :
  </label>
                    <div class="col mb-3">
                     <input class="q2 form-check-input" value="1" type="radio" name="ok" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    نعم
  </label>

                     <input class="q2 form-check-input" value="0" type="radio" name="ok" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
   لا
  </label>
                    </div>

                                        <div class="col mb-3">
                      <br>
                      <input type="button" onclick="add(1,2)" value="اضافة" class="add form-control btn btn-success">
                    </div>
                
                  </div>
                  <br>
                      <table id="example" width="100%" class="datatables-basic table border-top">
      <thead>
        <input type="hidden" class="re">
        <tr>
   
          <th><center>رقم</center></th>
          <th><center>الاجابة</center> </th>
          <th><center>الحالة</center> </th>
          <th><center>حذف</center> </th>
        </tr>

      </thead>
   <tbody class="table1">


     </tbody>
    </table>
                 
                 <input type="hidden" class="array" name="q">
                  <input type="hidden" value="<?=$_GET['id']?>" name="id">
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
       var x=0;
       $(".close").click(function() {
        x=0;
       });
       var array=[]

      function add(c,d){

        var q=$(".q"+c).val()
       
       $(".q"+d+":checked").each(function(){
      var ok=$(this).val()
      if (ok==1) {
        var a="الاجابة الصحيحة";

      }else{
        var a="الاجابة خاطئة";
       
      }
       
       if (x<=3) {
        x++;
         
  
      var q1 = q +"*"+ok;
       
                 
        var table= '<tr class="a'+x+'"><td ><center>'+x+'</center></td><td ><center>'+q+'</center></td><td><center>'+a+'</center></td><td><center><button   type="button" onclick="del('+x+')"  class="dd'+x+'  btn btn-danger" z="'+x+'" delete="'+q1+'"><i class="bx bxs-trash-alt"></i></button> </center></td></tr>';
    $(".table"+c).append(table)
     
     array.push(q1)
           
          $(".array1").val(array);

           $(".array").val(array);
    
       }
       


    })
    
     

     
      }
      
      function del(s) {
  var a=$(".dd"+s).attr('delete')

  var z=$(".dd"+s).attr('z')
  

 console.log(a,z)
 array.splice($.inArray(a , array), 1)


  $(".a"+z).remove()

  



     
          $(".array1").val(array);
     
           $(".array").val(array);
 
   
    x--

}
    </script>
 <!-- group delete -->
          <div class="modal fade" id="basicModal2" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">حذف السؤال</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="اغلاق"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
<form method="post" action="inc/fun/quiz_b/delete_b.php">
                    <div id="name" class=" col mb-3">
                      
                      
                    </div>
                    <input class="zz" type="hidden" name="id">
                    <input type="hidden" value="<?=$_GET['id']?>" name="id_a">
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