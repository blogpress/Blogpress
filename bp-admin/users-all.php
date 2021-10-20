
        
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

                    <?php include(ROOT_PATH . "/bp-includes/includes/messages.php"); ?>
 <div class="box box-primary">
               <div class="box-header with-border">
                <h3 class="box-title">
    <?php echo $users_all; ?>
              </h3>
               </div>
              <!-- /.box-header -->


       <div class="box-body">
                    <div class="box-body">
 <table  class="table">
                <thead>
                <tr>
                  <th>#</th>
                  <th>User Name</th>
                  <th>Email Address</th>
                  <th>Action</th>
                </tr>
                </thead>
 
                        <tbody>
                            <?php foreach ($admin_users as $key => $user): ?>
                                <tr>
                                    <td><?php echo $key + 1; ?></td>
                                    <td><?php echo $user['username']; ?></td>
                                    <td><?php echo $user['email']; ?></td>
                                    <td>
<a href="users.php?load=edit&id=<?php echo $user['id']; ?>" class="edit btn btn-primary"> <i class="fas fa-pencil-alt"></i> Edit</a>
<a href="users.php?load=edit&delete_id=<?php echo $user['id']; ?>" class="delete btn btn-danger"> <i class="far fa-trash-alt"></i> Delete</a>
</td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
 <thead>
                <tr>
                  <th>#</th>
                  <th>User Name</th>
                  <th>Email Address</th>
                  <th>Action</th>
                </tr>
                </thead>
                    </table>
                </div>
         
      </div>   </div>   </div>
         
</section>

        </div>  