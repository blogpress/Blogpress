<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/bp-includes/controllers/topics.php");
adminOnly();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit Topics- Admin</title>
        
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
        <a href="<?php echo BASE_URL . '/admin/topics/index.php' ?>" class="btn btn-primary">All Topics</a>
        </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php?load=dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="index.php?load=templates">Topics</a></li>
        <li class="active">Create Topics</li>
      </ol>
    </section>
                <!-- Main content -->
    <section class="content">
      <div class="row">
           <div class="col-xs-12">

                    <?php include(ROOT_PATH . "/bp-includes/helpers/formErrors.php"); ?>
<div class="box box-primary">
               <div class="box-header with-border">
                <h3 class="box-title">
     Edit Topics
              </h3>
               </div>

                    <form action="topics-edit.php" method="post">
                       <div class="box-body">
<div class="form-group">  <input type="hidden" name="id" value="<?php echo $id; ?>" >
                        <div>
                            <label>Name</label>
                            <input type="text" name="name" value="<?php echo $name; ?>"   class="form-control">
                        </div>
                        <div>
                            <label>Description</label>
                            <textarea name="description" id="body"><?php echo $description; ?></textarea>
                        </div>

                         <div class="box-footer">
                            <button type="submit" name="update-topic" class="btn btn-primary" >Update Topic</button>
                        </div>
                    </form>

                </div>

            </div>
            <!-- // Admin Content -->

        </div>
        <!-- // Page Wrapper -->
</div></div>
</div>
<script>
  new FroalaEditor('textarea');
</script>  
        <?php include(ROOT_PATH . "/bp-admin/includes/footer.php"); ?>