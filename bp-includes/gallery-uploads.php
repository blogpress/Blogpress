<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/bp-includes/database/db.php");?>
<?php


/**
@Version  : 1.0.0
@Function : Show iamge from table in Gallery
@Author   : Mukesh Yadav
@Source   : https://codingstatus.com/php-image-gallery/
**/

if(isset($_POST) && !empty($_FILES['image']['name']) && !empty($_POST['title'])){  
  
    $name = $_FILES['image']['name'];  
    list($txt, $ext) = explode(".", $name);  
    $image_name = time().".".$ext;  
    $tmp = $_FILES['image']['tmp_name'];  
  
    if(move_uploaded_file($tmp, 'bp-content/uploads/'.$image_name)){  
  
        $sql = "INSERT INTO gallery (title, image) VALUES ('".$_POST['title']."', '".$image_name."')";  
        $mysqli->query($sql);  
  
        $_SESSION['success'] = 'Uploading of image is successfully.';  
    header("location: " . ADMIN_URL . "/gallery.php"); 
    }else{  
        $_SESSION['error'] = 'Uploading of image is failed';  
    header("location: " . ADMIN_URL . "/gallery.php");  
    }  
}else{  
    $_SESSION['error'] = 'Please Select Image or Write title';  
    header("location: " . ADMIN_URL . "/gallery.php"); 
}  
  