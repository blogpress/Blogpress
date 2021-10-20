
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $admin_theme_header; ?> - <?php echo $code; ?></title>
        
        <?php get_meta();?>
    </head>

<body class="hold-transition skin-scriptlog sidebar-mini">



  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $admin_theme_header_themes_title; ?>        <small>
        <a href="<?php echo ADMIN_URL . '/themes.php?load=new' ?>"  class="btn btn-danger"><i class="fa fa-plus-circle"></i> <?php echo $add_new;?></a>
        </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo ADMIN_URL . '/dashboard' ?>"><i class="fa fa-dashboard"></i><?php echo $home; ?></a></li>
        <li><a href="<?php echo ADMIN_URL . '/themes.php?load=template' ?>"><?php echo $admin_theme_header_themes_title; ?></a> </li>
        <li class="active"><?php echo $admin_theme_header_all_themes; ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
         <div class="col-xs-12">
                           
             <?= $msg ?>        
                  
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
                  <th>#</th>
                  <th><?php echo $themes_title; ?></th>
                  <th><?php echo $author; ?></th>
                  <th><?php echo $version; ?></th>
                  <th><?php echo $status; ?></th>
                  <th><?php echo $action; ?></th>
                </tr>
                </thead>
                
                


       

 
                        <?php foreach ($themes as $theme) { ?>
                            
                                 <tbody>
				 <tr>
                                    <td>#</td>
  				    <td> 
<!-- Button trigger modal -->
<a href="themes.php?load=template&activate=<?= $theme['name'] ?>" data-toggle="modal" data-target="#exampleModalScrollable">
<?= $theme['name'] ?>
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <h4>Theme Details <span class="badge badge-secondary"><?= $theme['name'] ?></span></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <img src="<?= $theme['screenshot'] ?>" style="width:100%;height:300px;max-height:300px;" class="img-responsive"/>
<div class="alert alert-light" role="alert">
  <h4 class="alert-heading">Description</h4>
  <p>
<?= $theme['description'] ?></p>
  <hr>
  <p class="mb-0"><b>Theme Author :</b> <?= $theme['author'] ?></p>
<hr>
  <p class="mb-0"><b>Theme Version :</b> <?= $theme['version'] ?></p>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Updated</button>
      </div>
    </div>
  </div>
</div>

</td>
                                    <td> <?= $theme['author'] ?></td>
                                    <td> <?= $theme['version'] ?></td>
                                      <td><?php if ($sys['theme'] != $theme['folder']) { ?>
                                            <?php echo $installed;?>
                                            <?php
                                        } else {
                                            echo $active;
                                        } ?></td>
                               
                                    <td><?php if ($sys['theme'] != $theme['folder']) { ?>
                                            <a href="themes.php?load=template&activate=<?= $theme['folder'] ?>" class="btn btn-primary pull-center"><?php echo $active;?></a>
                                            <?php
                                        } else {
                                            echo $installed;
                                        } ?></td>
                              </tr>
                
                                
                </tbody>         
                                  

                        <?php } ?>
                    
                   
   <tfoot>
               <tr>
                  <th>#</th>
                  <th><?php echo $themes_title; ?></th>
                  <th><?php echo $author; ?></th>
                  <th><?php echo $version; ?></th>
                  <th><?php echo $status; ?></th>
                  <th><?php echo $action; ?></th>
                </tr>
                </tfoot>
              </table>
              </div>
                  <!-- /.box-body -->
            </div>
               <!-- /.box -->
         </div>
            <!-- /.col-xs-12 -->
      </div>
           <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
            

  