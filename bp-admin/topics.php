
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Topics        <small>
        <a href="<?php echo BASE_URL . 'bp-admin/topics-new.php' ?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add New</a>
        </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="index.php?posts=topics">Topics</a></li>
        <li class="active">All Topics</li>
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
              <!-- /.box-header -->
              
              <div class="box-body">
               <table id="Wirepress-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Topic Name</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                
                


       


                <section class="">
                    


                                  
         
            
            

              
                       
                      

          
                            

                                       
                                   


        
                    
                   
                    
                            <?php foreach ($topics as $key => $topic): ?>
                               <tr>
                                    <td><?php echo $key + 1; ?></td>
                                    <td><?php echo $topic['name']; ?></td>
                                    <td><a href="topics-edit.php?id=<?php echo $topic['id']; ?>"  class="btn btn-warning pull-center edit"> <i class="fas fa-pencil-alt"></i> Edit</a></td>
                                    <td><a href="topics-edit.php?del_id=<?php echo $topic['id']; ?>" class="btn btn-danger delete"> <i class="far fa-trash-alt"></i> Delete</a></td>
                              </tr>
                
                                
                </tbody>
                            <?php endforeach; ?>
             
            
                   
   <tfoot>
                <tr>
                <th>#</th>
                  <th>Topic Name</th>
                  <th>Edit</th>
                  <th>Delete</th>
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


                    <?php include(ROOT_PATH . '/bp-admin/includes/footer.php'); ?>
  
