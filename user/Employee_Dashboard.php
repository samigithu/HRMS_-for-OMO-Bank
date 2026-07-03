  <link rel="stylesheet" href="../user/css/popup_style.css">
  <?php include 'header/head.php';?>
   <?php include 'sidebar/sidebar_menu.php';?>
           <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-header">
			  <?php date_default_timezone_set("Africa/Addis_Ababa");
		         echo date("g:i:sP A",time());?>
                <h3 class="card-title" style="float: right;">
              <?php echo htmlspecialchars($lang['wc']);?> 
                </h3>
              </div>
              <div class="card-body">
        <div class="container-calendar">
        <h3 id="monthAndYear"></h3>
        <div class="button-container-calendar">
            <button id="previous" onclick="previous()">&#8249;</button>
            <button id="next" onclick="next()">&#8250;</button>
        </div>
        <table class="table-calendar" id="calendar" data-lang="en">
		
            <thead id="thead-month"></thead>
            <tbody id="calendar-body"></tbody>
        </table>
        <div class="footer-container-calendar">
             <label for="month"><?php echo htmlspecialchars($lang['jt']);?>  </label>
             <select id="month" onchange="jump()">
                 <option value=0><?php echo htmlspecialchars($lang['jan']);?></option>
                 <option value=1><?php echo htmlspecialchars($lang['feb']);?></option>
                 <option value=2><?php echo htmlspecialchars($lang['mar']);?></option>
                 <option value=3><?php echo htmlspecialchars($lang['apr']);?></option>
                 <option value=4><?php echo htmlspecialchars($lang['may']);?></option>
                 <option value=5><?php echo htmlspecialchars($lang['jun']);?></option>
                 <option value=6><?php echo htmlspecialchars($lang['jul']);?></option>
                 <option value=7><?php echo htmlspecialchars($lang['aug']);?></option>
                 <option value=8><?php echo htmlspecialchars($lang['sep']);?></option>
                 <option value=9><?php echo htmlspecialchars($lang['oct']);?></option>
                 <option value=10><?php echo htmlspecialchars($lang['nov']);?></option>
                 <option value=11><?php echo htmlspecialchars($lang['dec']);?></option>
             </select>
             <select id="year" onchange="jump()"></select>       
        </div>
    </div>
  </div>
         </div>
          </div>
        </div>
      </div>
    </section>
         <!--Calendar pure javascript Script JS -->
         <script type="text/javascript" src="../user/js/calanderscript.js"></script>
		 <link rel="stylesheet" href="../user/css/calandercss.css">
         <!-- Project Code End -->    
<?php include "Employee_footer.php"; ?>

        <script src="plugins/jquery/jquery.min.js"></script>
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <script src="dist/js/adminlte.js"></script>
        <script src="dist/js/demo.js"></script>

        <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
        <script src="plugins/raphael/raphael.min.js"></script>
        <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
        <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
        <script src="plugins/chart.js/Chart.min.js"></script>
        <script src="dist/js/pages/dashboard2.js"></script>
</body>

</html>