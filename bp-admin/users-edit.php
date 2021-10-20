
        
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <?php echo $users; ?>    
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo ADMIN_URL . '/dashboard.php' ?>"><i class="fa fa-dashboard"></i> <?php echo $home; ?></a></li>
        <li class="active"><?php echo $users; ?></li>
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
<?php echo $users_all; ?>
              </h3>
               </div>

       <div class="box-body">
                    <div class="box-body">
                    <form action="users.php?load=edit" method="post">
                        <input type="hidden" name="id" value="<?php echo $id; ?>" >
                        <div>
                            <label>Username</label>
                            <input type="text" name="username" value="<?php echo $username; ?>" class="form-control">
                        </div>
                        <div>
                            <label>Email</label>
                            <input type="email" name="email" value="<?php echo $email; ?>" class="form-control">
                        </div>
                        <div>
                            <label>Password</label>
                            <input type="password" name="password" value="<?php echo $password; ?>" class="form-control">
                        </div>
                        <div>
                            <label>Password Confirmation</label>
                            <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="form-control">
                        </div>
                        <div>
                            <?php if (isset($admin) && $admin == 1): ?>
                                <label>
                                    <input type="checkbox" name="admin" checked>
                                    Admin
                                </label>
                            <?php else: ?>
                                <label>
                                    <input type="checkbox" name="admin">
                                    Admin
                                </label>
                            <?php endif; ?>
                            
                        </div>

                        <div>
                            <button type="submit" name="update-user" class="btn btn-big">Update User</button>
                        </div>
                    </form>

                </div>

            </div>
            <!-- // Admin Content -->

        </div>        </div>        </div>        </div>
        <!-- // Page Wrapper -->

