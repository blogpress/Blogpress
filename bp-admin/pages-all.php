

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <?php echo $page;?>       <small>
        <a href="<?php echo ADMIN_URL . '/pages.php?load=new' ?>" class="btn btn-primary">
<i class="fa fa-plus-circle"></i> <?php echo $add_new;?></a>
        </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo ADMIN_URL . '/index.php' ?>"><i class="fa fa-dashboard"></i> <?php echo $home;?></a></li>
        <li><a href="<?php echo ADMIN_URL . '/pages.php?load=all' ?>"><?php echo $page;?></a></li>
        <li class="active"><?php echo $pages_all;?></li>
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
       <?php echo $posts_all;?>
              </h3>
               </div>
              <!-- /.box-header -->


       <div class="box-body">
               <table  class="table">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Post Title</th>
                  <th>Author</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  <th>Status</th>
                </tr>
                </thead>
                
                

                            <?php foreach ($posts as $key => $post): ?>
                                <tr>
                                    <td><?php echo $key + 1; ?></td>
                                    <td><?php echo $post['title'] ?></td>
                                    <td>Awa</td>
                                    <td><a href="pages.php?load=edit&id=<?php echo $post['id']; ?>" class="btn btn-warning pull-center edit"> <i class="fas fa-pencil-alt"></i> Edit</a></td>
                                    <td><a href="pages.php?load=edit&delete_id=<?php echo $post['id']; ?>"  class="btn btn-danger delete"> <i class="far fa-trash-alt"></i> Delete</a></td>

                                    <?php if ($post['published']): ?>
                                        <td><a href="pages.php?load=edit&published=0&p_id=<?php echo $post['id'] ?>"  class="btn btn-primary unpublish"> <i class="fas fa-undo-alt"></i> Unpublish</a></td>
                                    <?php else: ?>
                                        <td><a href="pages.php?load=edit&published=1&p_id=<?php echo $post['id'] ?>" class="btn btn-primary publish"> <i class="fas fa-redo-alt"></i> Publish</a></td>
                                    <?php endif; ?>
                                    
                                </tr>
                            <?php endforeach; ?>

                        </tbody> <thead>
                <tr>
                  <th>#</th>
                  <th>Post Title</th>
                  <th>Author</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  <th>Status</th>
                </tr>
                </thead>
                
                    </table>

                </div></div></div></div></div>

    