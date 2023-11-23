

    
    




<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  
  <div class="app-brand demo ">
    <a href="index.php" class="app-brand-link">
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
      <span class="app-brand-text demo menu-text fw-bolder ms-2">        <?php
     $sql->selectall('name ');
     $x=1;
     while ($row = $sql->res->fetch_assoc()) {
      echo $row['name'];
}
      ?></span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  
  
  <ul class="menu-inner py-1">
    <!-- Dashboards -->
<?php 
$log=$_SESSION['login'];
$sql->selectall("user where name = '$log'");
while ($row = $sql->res->fetch_assoc()) {
$pr=$row['pr'];
if ($pr==1) {
?>

         <li class="menu-item <?php
if ($_GET['dash']=="list") {
    echo "active";
  }
 ?>">
          <a href="?dash=list" class="menu-link">
             <i class="menu-icon tf-icons bx bxs-book-reader"></i>
            <div >لوحة التحكم</div>
          </a>
        </li>

      
  <!-- Projects -->
           <li class="menu-item <?php
if ($_GET['teac']=="pre") {
    echo "active";
  }
 ?>">
          <a href="?teac=pre" class="menu-link">

             <i class="menu-icon tf-icons bx bxs-user-account"></i>
            <div >العنوان الرئيسي</div>
          </a>
        </li>

           <li class="menu-item <?php
if ($_GET['quiz_yes1']=="list") {
    echo "active";
  }
 ?>">
          <a href="?quiz_yes1=list" class="menu-link">

             <i class="menu-icon tf-icons bx bxs-user-account"></i>
            <div >تقارير اليوم</div>
          </a>
        </li>

                   <li class="menu-item <?php
if ($_GET['quiz_yes2']=="list") {
    echo "active";
  }
 ?>">
          <a href="?quiz_yes2=list" class="menu-link">

             <i class="menu-icon tf-icons bx bxs-user-account"></i>
            <div >تقارير جميع الايام</div>
          </a>
        </li>
 
                   <li class="menu-item <?php
if ($_GET['quiz_yes3']=="list") {
    echo "active";
  }
 ?>">
          <a href="?quiz_yes3=list" class="menu-link">

             <i class="menu-icon tf-icons bx bxs-user-account"></i>
            <div >المركز</div>
          </a>
        </li>

         <li class="menu-item <?php
if ($_GET['user']=="list") {
    echo "active";
  }
 ?>">
          <a href="?user=list" class="menu-link">
             <i class="menu-icon tf-icons bx bxs-user"></i>
            <div >المستخدمين</div>
          </a>
        </li>

          <li class="menu-item <?php
if ($_GET['set']=="list") {
    echo "active";
  }
 ?>">
          <a data-bs-toggle="modal" data-bs-target="#basicModal5" class="menu-link">
             <i class="menu-icon tf-icons bx bxs-cog"></i>
            <div >اﺳﻢ اﻟﻤﻮﻗﻊ</div>
          </a>
        </li>
<?php
}elseif($pr==2){
  ?>



         <li class="menu-item <?php
if ($_GET['office']=="list") {
    echo "active";
  }
 ?>">
          <a href="?office=list" class="menu-link">
             <i class="menu-icon tf-icons bx bxs-user"></i>
            <div >جميع الاسئلة</div>
          </a>
        </li>

                   <li class="menu-item <?php
if ($_GET['quiz_yes3']=="list") {
    echo "active";
  }
 ?>">
          <a href="?quiz_yes3=list" class="menu-link">

             <i class="menu-icon tf-icons bx bxs-user-account"></i>
            <div >المركز</div>
          </a>
        </li>

        <li class="menu-item <?php
if ($_GET['user']=="edit") {
    echo "active";
  }
 ?>">

          <a href="?user=edit" class="menu-link">
             <i class="menu-icon tf-icons bx bxs-user"></i>
            <div >اعدادات الحساب</div>
          </a>
        </li>


         <li class="menu-item" >
          <a href="log_out.php" class="menu-link">
            <i class="bx bx-power-off me-2"></i>
            <div >ﺗﺴﺠﻴﻞ اﻟﺨﺮﻭﺝ</div>
          </a>
        </li>

                    
     
  <?php
}
}
?>


    
   


    
    
      
      </ul>
    </li>

  

    
  

</aside>
<!-- / Menu -->
    

    <!-- Layout container -->
    <div class="layout-page">
      
      



<!-- Navbar -->



<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
  

  

  

      
      

      
      
      <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
          <i class="bx bx-menu bx-sm"></i>
        </a>
      </div>
      

      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

        
        <!-- Search -->
        <div class="navbar-nav align-items-center">
          <div class="nav-item navbar-search-wrapper mb-0">
            <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
             <i class="menu-icon tf-icons bx bx-user"></i>
              <span class="d-none d-md-inline-block text-muted">ﻣﺮﺣﺒﺎ <?php  echo $_SESSION['login']; ?></span>
            </a>
          </div>
        </div>
        <!-- /Search -->


        <ul class="navbar-nav flex-row align-items-center ms-auto">
          

          <!--/ Language -->


          

          <!-- Style Switcher -->
          <li class="nav-item me-2 me-xl-0">
            <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
              <i class='bx bx-sm'></i>
            </a>
          </li>
          <!--/ Style Switcher -->

         
          <!-- User -->
          <li class="nav-item navbar-dropdown dropdown-user dropdown">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <div class="avatar avatar-online">
                <img src="img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">


              <li>
                <a class="dropdown-item" href="log_out.php" >
                  <i class="bx bx-power-off me-2"></i>
                  <span class="align-middle">ﺗﺴﺠﻴﻞ اﻟﺨﺮﻭﺝ</span>
                </a>
              </li>
            </ul>
          </li>
          <!--/ User -->
          

        </ul>
      </div>

      
 
      
      
  </nav>


  
<!-- / Navbar -->
<!-- update name -->
          <div class="modal fade" id="basicModal5" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">ﺗﻌﺪﻳﻞ اﺳﻢ اﻟﻤﻮﻗﻊ</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="اﻏﻼﻕ"></button>
                </div>
                <div class="modal-body">
                
                  <div class="row">
<form method="post" action="inc/fun/update_site.php">
                    <div class="col mb-3">
                      <label for="nameBasic" class="form-label">اﻻﺳﻢ</label>
                      <input type="text" id="nameBasic" class="form-control" required="" name="name" placeholder="اﻻﺳﻢ">
                   
                    </div>
                  </div>
                 
                 
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">اﻏﻼﻕ</button>
                  <button type="submit" class="btn btn-primary">ﺣﻔﻆ</button>
</form>
                </div>
              </div>
            </div>
          </div>
