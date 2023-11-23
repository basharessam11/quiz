<div class="container-xxl flex-grow-1 container-p-y">
<div class="card mb-4">
   <center><h5 class="card-header">تعديل البيانات :</h5></center>   
      <br>
      <?php

 if(isset($_POST["username"])){
$username=filter_var($_POST["username"], FILTER_SANITIZE_STRING);
$email=filter_var($_POST["email"], FILTER_SANITIZE_STRING);
$phone=filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
$pass=filter_var($_POST['password'], FILTER_SANITIZE_STRING);

if (empty($pass)) {
  $password=filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
}else{
  $password= md5($pass);
}
$a=$sql->check('user',['name'=>"$username",'id !'=>$user_id]);



 $num=$sql->check;
if ($num <1) {
 $sql->update("user",$user_id,["name"=>"$username","email"=>"$email","phone"=>"$phone","password"=>"$password"]); 
$_SESSION['login']=$username;
          echo '<br><br><div id="success-alert1" class="alert alert-success" role="alert">
  تم التعديل بنجاح
</div>';
    
}
}



      


         
      ?>
      <div class="card-body">
 
   <form id="formAuthentication" class="mb-3" action="<?=$_SERVER['PHP_SELF']?>?user=edit" method="POST">
    <?php
 $sql->selectall("user where id=$user_id  " );
                    
     while ($row = $sql->res->fetch_assoc()) {
    


    ?>
            <div class="mb-3">
              <label for="email" class="form-label">اسم المستخدم</label>
              <input type="text" class="form-control" name="username" value="<?=$row['name'];?>" placeholder="اسم المستخدم" autofocus>
            </div>

            <div class="mb-3">
              <label for="email"  class="form-label">البريد الالكتروني</label>
              <input type="text" class="form-control" name="email" value="<?=$row['email'];?>" placeholder="البريد الالكتروني" autofocus>
            </div>


<div class="mb-3">
              <label for="phone"  class="form-label">الجوال</label>
              <input type="phone" required="" class="form-control" name="phone" value="<?=$row['phone'];?>" placeholder="الجوال" autofocus>
            </div>

            <div class="mb-3 form-password-toggle">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="password">كلمة المرور</label>
                
              </div>
              <div class="input-group input-group-merge">
                <input type="password" id="password"  class="form-control" name="password" placeholder="***********" aria-describedby="password" />
                <input type="hidden" id="nameBasic" value="<?=$row['password'];?>" class=" form-control" name="pass" required="" placeholder="كلمة المرور">
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>
            <?php
          }
             if(isset($_POST["username"])){

             if ($num==1) {
          echo '<br><br><div id="success-alert" class="alert alert-danger" role="alert">
 <center> ﻫﺬا المستخدم ﻣﻮﺟﻮﺩﻩ ﺑﺎﻟﻔﻌﻞ </center>
</div>';
          }
          }
            ?>

            <div class="mb-3">
              <button class="btn btn-primary d-grid w-100" type="submit">تعديل</button>
            </div>
          </form>
      </div>
    </div>
    </div>