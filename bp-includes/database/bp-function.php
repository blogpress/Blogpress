
<?php


function get_meta()
{?>


<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo (BLOGPRESS_CSS . "bootstrap.min.css");?>">
  <!-- Font Awesome -->
<script src="<?php echo (BLOGPRESS_JS . "6adab87203.js");?>" crossorigin="anonymous"></script>
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo (BLOGPRESS_CSS . "ionicons.min.css");?>">

  <link rel="stylesheet" href="<?php echo (BLOGPRESS_CSS . "AdminLTE.min.css");?>">
  <link rel="stylesheet" href="<?php echo (BLOGPRESS_CSS . "scriptlog-skin.css");?>">
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link rel="stylesheet" href="<?php echo (BLOGPRESS_CSS . "ie10-viewport-bug-workaround.css");?>">
   <style>
    visibility: visible !important;
</style>
  
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="<?php echo (BLOGPRESS_JS . "html5shiv.js");?>"></script>
<script src="<?php echo (BLOGPRESS_JS . "respond.min.js");?>"></script>
<![endif]-->
<script src="<?php echo (BASE_URL . "/bp-includes/api/editor/ckeditor.js");?>"></script>

<link href="<?php echo (BLOGPRESS_LOGO . "favicon.png");?>" rel="Shortcut Icon">


<?php
}

function get_navbar(){?>

<?php }