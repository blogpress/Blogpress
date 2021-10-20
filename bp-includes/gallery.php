<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/bp-includes/database/db.php");?>
<?php


/**
@Version  : 1.0.0
@Function : Delete selected image from gallery
@Author   : Mukesh Yadav
@Source   : https://www.javatpoint.com/image-gallery-crud-using-php-mysql
**/

if(isset($_POST) && !empty($_POST['id'])){  
  
        $sql = "DELETE FROM gallery WHERE id = ".$_POST['id'];  
        $mysqli->query($sql);  
  
        $_SESSION['success'] = 'Deletion of image is successfully.';  
    header("location: " . ADMIN_URL . "/gallery.php");  
}else{  
    $_SESSION['error'] = 'Please Select Image or Write title';  
    header("location: " . ADMIN_URL . "/gallery.php");  
}  
  
?>  