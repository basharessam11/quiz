<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
  <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
    <div class="mb-2 mb-md-0">
      © <script>
      document.write(new Date().getFullYear())
      </script>
       <a href="https://www.facebook.com/basharessam11" target="_blank" class="footer-link fw-bolder">❤️ made with  by  bashar essam </a>
    </div>

  </div>
</footer>
<!-- / Footer -->

          
          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    
    
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
  </div>
  <!-- / Layout wrapper -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js'></script>


  
  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->

  <script src="vendor/libs/popper/popper.js"></script>
  <script src="vendor/js/bootstrap.js"></script>
  <script src="vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  
  <script src="vendor/libs/hammer/hammer.js"></script>
  <script src="vendor/libs/i18n/i18n.js"></script>
  <script src="vendor/libs/typeahead-js/typeahead.js"></script>
  
  <script src="vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="vendor/libs/apex-charts/apexcharts.js"></script>

  <!-- Main JS -->
  <script src="js/main.js"></script>

  <!-- Page JS -->
  <script src="js/dashboards-crm.js"></script>
  <script>
  //modul

  $('.id').click(function(){
    var a=$(this).attr('besho');

    $('.zz').val(a)
  })
    $('.id').click(function(){
    var a=$(this).attr('besho');
    var n=$(this).attr('na');
console.log(n)
    $('.zz').val(a)
    $("#name").html('هل انت متأكد من حذف ' + n)
  })
    
  //alert
        $("#success-alert").fadeTo(4000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);
});
          $("#success-alert1").fadeTo(4000, 500).slideUp(500, function(){
    $("#success-alert1").slideUp(500);
});
            $("#success-alert2").fadeTo(4000, 500).slideUp(500, function(){
    $("#success-alert2").slideUp(500);
});
            $("#success-alert3").fadeTo(4000, 500).slideUp(500, function(){
    $("#success-alert3").slideUp(500);
});
</script>
</body>



<!-- Mirrored from themeselection.com/demo/sneat-bootstrap-html-admin-template/html/vertical-menu-template/dashboards-crm.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Feb 2022 00:21:27 GMT -->
</html>
