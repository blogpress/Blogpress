
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <?php echo $newspost;?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo ADMIN_URL . '/dashboard.php' ?>"><i class="fa fa-dashboard"></i> <?php echo $home;?></a></li>
        <li><a href="<?php echo ADMIN_URL . '/index.php?posts=all' ?>"><?php echo $posts_all;?></a></li>
        <li class="active">Edit</li>
      </ol>
    </section>




                <!-- Main content -->
    <section class="content">
      <div class="row">
           <div class="col-xs-12">

          <div class="col-xs-9">          <?php include(ROOT_PATH . "/bp-includes/helpers/formErrors.php"); ?>

                    <div class="box box-primary">
               <div class="box-header with-border">
                <h3 class="box-title">
     New Post
              </h3>
               </div>

<form action="index.php?posts=new" method="post" enctype="multipart/form-data">
                     <div class="box-body">
<div class="form-group">
                            <label>Title</label>
<input type="text" name="title" value="<?php echo $title ?>"  placeholder="Post Title" class="form-control form-control-lg" style="font-size:18px;font-weight:bold;">
                        </div>
                        <div>
<label>     
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
<i class="fa fa-photo-video"></i> Add Media
        </button></label>
<textarea name="body" id="body" class="tinymce"><?php echo $body ?></textarea>
                        </div>
                      
                       
                        <div>
                           

                        </div>
                       
</div>

                </div>

            </div>
            <!-- // Admin Content -->
<div class="col-xs-3"> <div class="box box-primary">
 <div class="box-header with-border">
              


  <div>
                            <label>Image</label>
                            <input type="file" name="image" class="text-input" style="padding:15px;border:1px solid #ddd;width:100%;">
                        </div>





 <div>
                            <label>Topic</label>
   <select multiple class="form-control"  name="topic_id" style="padding:15px;border:1px solid #ddd;width:100%;">
                              
                                <?php foreach ($topics as $key => $topic): ?>
                                    <?php if (!empty($topic_id) && $topic_id == $topic['id'] ): ?>
                                        <option  selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                                    <?php endif; ?>

                                <?php endforeach; ?>

                            </select>



 <?php if (empty($published)): ?>
                                <label>
                                    <input type="checkbox" name="published">
                                    Publish
                                </label>
                            <?php else: ?>
                                <label>
                                    <input type="checkbox" name="published" checked>
                                    Publish
                                </label>
                            <?php endif; ?>
                           
 <div>
                            <button type="submit" name="add-post" class="btn btn-big btn-primary">Publish</button>
                        </div>
                   
          
               </div>
 </form>
</div>
</div>
        </div>
        </div>    </div>  </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Media Center</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Wait.. <br>
All Imaged is loading...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Insert in Post</button>
      </div>
    </div>
  </div>
</div>
        <?php include(ROOT_PATH . "/bp-admin/includes/footer.php"); ?>