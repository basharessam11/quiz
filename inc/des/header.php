<?php
include "inc/sql.php";
if (!isset($_SESSION['login'])) {
header("location:index.php");
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
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="rtl" data-theme="theme-default" data-assets-path="" data-template="vertical-menu-template">


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>    <center>
        <?php
     $sql->selectall('name ');
  
     while ($row = $sql->res->fetch_assoc()) {
      echo $row['name'];
}
      ?></center>
  </title>
    
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
   
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link href="css/css2.css" rel="stylesheet">

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
    <link rel="stylesheet" href="vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->
    
    <!-- Helpers -->
    <script src="vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    

    
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="js/config.js"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->

   



  <link rel="stylesheet" type="text/css" href="table/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" type="text/css" href="table/css/buttons.bootstrap5.min.css">
  <style type="text/css" class="init">


  </style>

  <script type="text/javascript" language="javascript" src="table/js/jquery-3.5.1.js"></script>
  <script type="text/javascript" language="javascript" src="table/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
  <script type="text/javascript" language="javascript" src="table/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" language="javascript" src="table/js/buttons.bootstrap5.min.js"></script>
  <script type="text/javascript" language="javascript" src="table/js/jszip.min.js"></script>
  <script type="text/javascript" language="javascript" src="table/js/pdfmake.min.js"></script>
  <script type="text/javascript" language="javascript" src="table/js/vfs_fonts.js"></script>
  <script type="text/javascript" language="javascript" src="table/js/buttons.html5.min.js"></script>
  <script type="text/javascript" language="javascript" src="table/js/buttons.print.min.js"></script>
  <script type="text/javascript" language="javascript" src="table/js/buttons.colVis.min.js"></script>

   <script type="text/javascript" class="init">
  

  $("html").attr('dir', 'rtl');


$(document).ready(function() {

    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
          
                           
            
            {
                extend: 'copy',
                exportOptions: {
                    columns: ':visible'
                }
                           
            },
                        {
                extend: 'print',
                exportOptions: {
                    columns: ':visible'
                }
                           
            },
            {
                extend: 'excel',
                exportOptions: {
                    columns: ':visible'
                }
                           
            },
            {
                extend: 'pdf',
                exportOptions: {
                    columns: ':visible'
                }
                           
            },
                           
           
            'colvis'
        ],
        columnDefs: [ {
            
            visible: false
        } ]
    } );
     $('#example_filter').after('<br>');
     $('#example_filter').after('<br>');
     $('#example_filter').after('<br>');
} );
  </script>

<body>

  <!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
  <div class="layout-container">
