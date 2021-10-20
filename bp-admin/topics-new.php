<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/bp-includes/controllers/topics.php");
adminOnly();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Create Topics- Admin</title>
        
        <?php get_meta(); ?>
    </head>

<body class="hold-transition skin-scriptlog sidebar-mini">


        <?php include(ROOT_PATH . "/bp-admin/includes/navbar.php"); ?>

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Topics        <small>
        <a href="<?php echo ADMIN_URL . '/index.php?posts=topics' ?>" class="btn btn-primary"><i class="fa fa-setting"></i> All Topics</a>
        </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo ADMIN_URL . '/dashboard.php' ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo ADMIN_URL . '/index.php?posts=topics' ?>">Topics</a></li>
        <li class="active">Create Topics</li>
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
     Manage Topics
              </h3>
               </div>



                    <?php include(ROOT_PATH . "/bp-includes/helpers/formErrors.php"); ?>

                    <form action="topics-new.php" method="post">
                    <div class="box-body">
<div class="form-group">
<label>Title (required)</label> 
  <input type="text" name="name" value="<?php echo $name ?>"  class="form-control">
                        </div>
                        <div>
                            <label>Description</label>
                            <textarea name="description" id="body"><?php echo $description ?></textarea>
                        </div>

</div>
                      <div class="box-footer">
                            <button type="submit" name="add-topic"  class="btn btn-primary" >Add Topic</button>
                        </div>
                    </form>


<script>
  new FroalaEditor('textarea');
</script>  
</div></div></div></div>
        <?php include(ROOT_PATH . "/bp-admin/includes/footer.php"); ?>