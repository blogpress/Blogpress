
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <?php echo $newspost;?>       <small>
        <a href="<?php echo ADMIN_URL . '/index.php?posts=all' ?>" class="btn btn-primary">
<i class="fa fa-plus-circle"></i> <?php echo $add_new;?></a>
        </small>
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

                    <?php include(ROOT_PATH . "/bp-includes/helpers/formErrors.php"); ?>

                    <div class="box box-primary">
               <div class="box-header with-border">
                <h3 class="box-title">
     Edit Post
              </h3>
               </div>

<form action="index.php?posts=edit" method="post" enctype="multipart/form-data">
                   <div class="box-body">
<div class="form-group">
      <input type="hidden" name="id" value="<?php echo $id ?>">
                        <div>
                            <label>Title</label>
                            <input type="text" name="title" value="<?php echo $title ?>"  class="form-control">
                        </div>
                        <div>
                            <label>Body</label>
                            <textarea name="body" id="body"><?php echo $body ?></textarea> <div id="editor"></div>
                        </div>
                        <div>
                            <label>Image</label>
                            <input type="file" name="image"  class="text-input" style="padding:15px;border:1px solid #ddd;width:100%;">
                        </div>
                        <div>
                            <label>Topic</label>
                            <select name="topic_id" class="custom-select"  style="padding:15px;border:1px solid #ddd;width:100%;">
                                <option value=""></option>
                                <?php foreach ($topics as $key => $topic): ?>
                                    <?php if (!empty($topic_id) && $topic_id == $topic['id'] ): ?>
                                        <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>

                            </select>
                        </div>
                        <div>
                            <?php if (empty($published) && $published == 0): ?>
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
                           

                        </div>
                        <div>
                            <button type="submit" name="update-post" class="btn btn-big">Update Post</button>
                        </div>
                    </form>

                </div>

            </div>
            <!-- // Admin Content -->

        </div>
        </div>
        </div>
        </div>
        <!-- // Page Wrapper -->

<script>
  new FroalaEditor('textarea');
</script>  
 
        <?php include(ROOT_PATH . "/bp-admin/includes/footer.php"); ?>