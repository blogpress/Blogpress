<?php 
include("../path.php");?>
<?php include(ROOT_PATH . "/bp-includes/controllers/settings.php"); 
adminOnly();
?>
<?php
/**
 @ Version : 1.0.0
 @ Function: Main Template data read and show in Theme section. 
 @ Contributer : Wordkwik
**/

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $admin_theme_header; ?> - <?php echo $code; ?></title>
     
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo (BLOGPRESS_CSS . "bootstrap.min.css");?>">
  <!-- Font Awesome -->
<script src="<?php echo (BLOGPRESS_JS . "6adab87203.js");?>" crossorigin="anonymous"></script>
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo (BLOGPRESS_CSS . "ionicons.min.css");?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo (BLOGPRESS_CSS . "dataTables.bootstrap.min.css");?>">
  <link rel="stylesheet" href="<?php echo (BLOGPRESS_CSS . "responsive.bootstrap.min.css");?>">
  <link rel="stylesheet" href="<?php echo (BLOGPRESS_CSS . "responsive.dataTables.min.css");?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo (BLOGPRESS_CSS . "AdminLTE.min.css");?>">
  <link rel="stylesheet" href="<?php echo (BLOGPRESS_CSS . "scriptlog-skin.css");?>">
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link rel="stylesheet" href="<?php echo (BLOGPRESS_CSS . "ie10-viewport-bug-workaround.css");?>">
   <!-- wysiwyg editor-->
  <link rel="stylesheet" href="<?php echo (BLOGPRESS_CSS . "bootstrap3-wysihtml5.min.css");?>">

  
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="<?php echo (BLOGPRESS_JS . "html5shiv.js");?>"></script>
<script src="<?php echo (BLOGPRESS_JS . "respond.min.js");?>"></script>
<![endif]-->

<!-- Include Editor style. -->
<link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />


<!-- Include Editor JS files. -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>

<!-- Icon -->
<link href="<?php echo (BLOGPRESS_LOGO . "favicon.png");?>" rel="Shortcut Icon">

    </head>

<body class="hold-transition skin-scriptlog sidebar-mini">


        <?php include(ROOT_PATH . "/bp-admin/includes/navbar.php"); ?>

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Settings       <small>
        <a href="<?php echo BASE_URL . '/admin/theme-install.php' ?>"  class="btn btn-danger"><i class="fa fa-plus-circle"></i> <?php echo $add_new;?></a>
        </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo BASE_URL . '/admin/index.php' ?>"><i class="fa fa-dashboard"></i><?php echo $home; ?></a></li>
        <li><a href="<?php echo BASE_URL . '/admin/themes.php' ?>"><?php echo $admin_theme_header_themes_title; ?></a> </li>
        <li class="active"><?php echo $admin_theme_header_all_themes; ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="settings">
         <div class="col-xs-12">
                           
               
                  
            <div class="box box-primary">
               <div class="box-header with-border">
                <h3 class="box-title">
       <?php echo $admin_theme_header_all_themes;?>
              </h3>
               </div>
              <!-- /.box-header -->
              
              <div class="box-body">
<table class="table">
<thead>
                <tr>
                 
                  <th>Options</th>
                  <th>Value</th>
 		  <th>Action</th>
                </tr>
                </thead><tr>


 <?php
                    $query=mysqli_query($conn,"select * from `wk_settings`");
		    while($settings=mysqli_fetch_array($query)){
                        ?>  
<tbody>

<td><?php echo $settings['nameopt'];?></td>

<td><?php echo $settings['valueopt'];?></td>

<td><a class="btn btn-primary" href="settings-edit.php?id=<?php echo $settings['id']; ?>">Edit</a></td>

           <?php
                    }
                ?>  
</table>
 
                  <!-- /.box-body -->
            </div>
               <!-- /.box -->
         </div>
            <!-- /.col-xs-12 -->
      </div></div>    
      <!-- /.row -->
 </section>  

  </div> 
      <?php include(ROOT_PATH . '/bp-admin/includes/footer.php'); ?>
  