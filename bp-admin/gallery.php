<?php 
include("../path.php");?>
<?php include(ROOT_PATH . "/bp-includes/controllers/gallery.php"); 
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
    <title>Gallery - Images</title>  
    <!-- Latest CSS which is minified and compiled -->  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  
    <!-- References: https://github.com/fancyapps/fancyBox -->  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>  
  
    <style type="text/css">  
    .gallery  
    {  
        display: inline-block;  
        margin-top: 20px;  
    }  
    .close-icon{  
    border-radius: 50%;  
        position: absolute;  
        right: 5px;  
        top: -10px;  
        padding: 5px 8px;  
    }  
        .form-image-upload{  
            background: #e8e8e8 none repeat scroll 0 0;  
            padding: 15px;  
        }  
    </style>  
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
 <section class="content">
      <div class="row">
           <div class="col-xs-12">
<div class="box box-primary">
             
              <!-- /.box-header -->
  
    <form action="../bp-includes/gallery-uploads.php" class="form-image-upload" method="POST" enctype="multipart/form-data">  
  
        <?php if(!empty($_SESSION['error'])){ ?>  
            <div class="alert alert-danger">  
                <strong>Whoops!</strong> Our input faces some problems. <br><br>  
                <ul>  
                    <li><?php echo $_SESSION['error']; ?></li>  
                </ul>  
            </div>  
        <?php unset($_SESSION['error']); } ?>  
  
        <?php if(!empty($_SESSION['success'])){ ?>  
        <div class="alert alert-success alert-block">  
            <button type="button" class="close" data-dismiss="alert">?</button>  
                <strong><?php echo $_SESSION['success']; ?></strong>  
        </div>  
        <?php unset($_SESSION['success']); } ?>  
  
        <div class="row">  
            <div class="col-md-5">  
                <strong>Title:</strong>  
                <input type="text" name="title" class="form-control" placeholder="Title">  
            </div>  
            <div class="col-md-5">  
                <strong>Image:</strong>  
                <input type="file" name="image" class="form-control">  
            </div>  
            <div class="col-md-2">  
                <br/>  
                <button type="submit" class="btn btn-success">Upload</button>  
            </div>  
        </div>  
  
    </form>   
    <div class="box-body">
                    <div class="box-body">
    <div class="row">  
    <div class='list-group gallery'>  
  <?php 
            $sql = "SELECT * FROM gallery";  
            $images = $mysqli->query($sql);  
              while($image = $images->fetch_assoc()){  
?>

          
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>  
                    <a class="thumbnail fancybox" rel="ligthbox" href="<?php echo uploads_url . ''?><?php echo $image['image'] ?>">  
                        <img class="img-responsive" alt="" src="<?php echo uploads_url . ''?><?php echo $image['image'] ?>" />  
                        <div class='text-center'>  
                            <small class='text-muted'><?php echo $image['title'] ?></small>  
                        </div>
                    </a>  
                    <form action="../bp-includes/gallery.php" method="POST">  
                    <input type="hidden" name="id" value="<?php echo $image['id'] ?>">  
                    <button type="submit" class="close-icon btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>  
                    </form>  
                </div>
            <?php } ?>  
  
        </div>
    </div> <!-- row / end -->  
</div></div></div></div></div></div>
  
<script type="text/javascript">  
    $(document).ready(function(){  
        $(".fancybox").fancybox({  
            openEffect: "none",  
            closeEffect: "none"  
        });  
    });  
</script>  




                    <?php include(ROOT_PATH . '//bp-admin//includes/footer.php'); ?>
  