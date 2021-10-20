<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/bp-includes/controllers/posts.php"); 
adminOnly();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
<title> <?php echo $dashboard; ?> - <?php echo $code; ?></title>        
<?php get_meta();?>
    </head>

<body class="hold-transition skin-scriptlog sidebar-mini">

<?php include(ROOT_PATH . "/bp-admin/includes/navbar.php"); ?>
        

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <?php echo $dashboard; ?>    
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo ADMIN_URL . '/index.php' ?>"><i class="fa fa-dashboard"></i> <?php echo $home; ?></a></li>
        <li class="active"><?php echo $dashboard; ?></li>
      </ol>
    </section>

             <!-- Main content -->
    <section class="content">
      <div class="row">
           <div class="col-xs-12">
            

                    <?php include(ROOT_PATH . "/bp-includes/includes/messages.php"); ?>     
            <div class="box box-primary">
               <div class="box-header with-border">
                <h3 class="box-title">
     Quick Links
              </h3>
               </div>   </div>
              <!-- /.box-header -->

                    

                </div>

            </div>
            <!-- // Admin Content -->

        </div>
        <!-- // Page Wrapper -->



                    <?php include(ROOT_PATH . '/bp-admin/includes/footer.php'); ?>
  

    </body>

</html>