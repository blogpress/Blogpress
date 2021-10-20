<?php
/**
 @ Version : 1.0.0
 @ Function: Admin footer message and Javascript
 @ Contributer : 
**/
?>
<!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
<span class='badge badge-danger'> <?php echo $version,VERSION;?></span></div>
    <!-- Default to the left -->
    <strong><?php echo $thank_you;?>
     </strong>
  </footer>
  
   <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  </div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo (BLOGPRESS_JS . "/jquery.min.js");?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo (BLOGPRESS_JS . "/bootstrap.min.js");?>"></script>

<script src="<?php echo (BLOGPRESS_JS . "/adminlte.min.js");?>"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo (BLOGPRESS_JS . "/ie10-viewport-bug-workaround.js");?>"></script>
<!-- Slimscroll -->
<script src="<?php echo (BLOGPRESS_JS . "/jquery.slimscroll.min.js");?>"></script>

<script src="<?php echo (BLOGPRESS_JS . "/editor.js");?>"></script>

</body>
</html>