<?php 
 session_start();
include "inc/sql.php";
error_reporting(0);
if (isset($_SESSION['login'])) {
  $user=$_SESSION['login'];
  $sql->selectall(" user where name = '$user'");
     while ($row1 = $sql->res->fetch_assoc()) {
    $pr=$row1['pr'];

     }
        if ($pr==1) {
       header("location:dashbord.php?dash=list");
       }elseif($pr==2){
      header("location:dashbord.php?office=list");
   }

}
 if(isset($_POST["username"])){
$username=$_POST["username"];
$password =$_POST['password'];
$pass= md5($password);
$sql->check('user',['name'=>"$username",'password'=>"$pass"]);

if ($sql->check ==1) {
 
  $_SESSION['login']=$username;

 $sql->selectall(" user where name = '$username'");
     while ($row1 = $sql->res->fetch_assoc()) {
    $pr=$row1['pr'];

     }
     if ($pr==1) {
     
       header("location:dashbord.php?dash=list");
      
    
     }elseif($pr==2){
    
      header("location:dashbord.php?office=list");
     
   }elseif($pr==3){
    
      header("location:dashbord.php?sch=list");
     
   }
 
}
}

?>
<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html lang="en" class="light-style  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="" data-template="vertical-menu-template">

  
<!-- Mirrored from themeselection.com/demo/sneat-bootstrap-html-admin-template/html/vertical-menu-template/auth-login-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Feb 2022 00:22:53 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Login </title>
    
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="vendor/libs/typeahead-js/typeahead.css" />
    <!-- Vendor -->
<link rel="stylesheet" href="vendor/libs/formvalidation/dist/css/formValidation.min.css" />

    <!-- Page CSS -->
    <!-- Page -->
<link rel="stylesheet" href="vendor/css/pages/page-auth.css">
    <!-- Helpers -->
    <script src="vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="js/config.js"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    <!-- Custom notification for demo -->
    <!-- beautify ignore:end -->

</head>

<body>

  <!-- Content -->

<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
      <!-- Register -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="index.html" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">

<svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

    
  <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
      <g id="Icon" transform="translate(27.000000, 15.000000)">
        <g id="Mask" transform="translate(0.000000, 8.000000)">
          <mask id="mask-2" fill="white">
            <use xlink:href="#path-1"></use>
          </mask>
          <use fill="#696cff" xlink:href="#path-1"></use>
          <g id="Path-3" mask="url(#mask-2)">
            <use fill="#696cff" xlink:href="#path-3"></use>
            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
          </g>
          <g id="Path-4" mask="url(#mask-2)">
            <use fill="#696cff" xlink:href="#path-4"></use>
            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
          </g>
        </g>
        <g id="Triangle" transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
          <use fill="#696cff" xlink:href="#path-5"></use>
          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
        </g>
      </g>
    </g>
  </g>
</svg>

</span>
              <span class="app-brand-text demo text-body fw-bolder"><?php
                      $sql->selectall("name");
                      while ($row=$sql->res->fetch_assoc()) {
                       echo $row['name'];
                      
                      }
                      ?></span>
            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-2">مرحبا بك</h4>
          <p class="mb-4">الرجاء كتابة اسم المستخدم وكلمة المرور</p>

          <form id="formAuthentication" class="mb-3" action="<?=$_SERVER['PHP_SELF']?>" method="POST">
            <div class="mb-3">
              <label for="email" class="form-label">اسم المستخدم</label>
              <input type="text" class="form-control" name="username" placeholder="اسم المستخدم" autofocus>
            </div>
            <div class="mb-3 form-password-toggle">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="password">كلمة المرور</label>
                
              </div>
              <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password" placeholder="***********" aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>
            <?php
             if(isset($_POST["username"])){
            if ($sql->check !=1) {
             echo '<br><div id="success-alert2" class="alert alert-danger" role="alert">
                       اسم المستخدم او كلمة المرور غير صحيحه الرجاء اعادة المحاولة
                      </div>';
            }
          }
            ?>
            <div class="mb-3">
              <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
            </div>
          </form>

      
<div><a href="sign_up.php">التسجيل في المسابقة</a></div>
          
        </div>
      </div>
      <!-- /Register -->
    </div>
  </div>
</div>

<!-- / Content -->

  

  

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="vendor/libs/jquery/jquery.js"></script>
  <script src="vendor/libs/popper/popper.js"></script>
  <script src="vendor/js/bootstrap.js"></script>
  <script src="vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  
  <script src="vendor/libs/hammer/hammer.js"></script>
  <script src="vendor/libs/i18n/i18n.js"></script>
  <script src="vendor/libs/typeahead-js/typeahead.js"></script>
  
  <script src="vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
<script src="vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
<script src="vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>

  <!-- Main JS -->
  <script src="js/main.js"></script>

  <!-- Page JS -->
  <script src="js/pages-auth.js"></script>
  
</body>


<!-- Mirrored from themeselection.com/demo/sneat-bootstrap-html-admin-template/html/vertical-menu-template/auth-login-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Feb 2022 00:22:54 GMT -->
</html>
