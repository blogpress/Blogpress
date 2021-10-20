<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/bp-includes/controllers/posts.php");
adminOnly();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
<title> <?php echo $dashboard; ?> - <?php echo $code; ?></title>        
<?php get_meta();?>
    </head>

<body class="hold-transition skin-scriptlog sidebar-mini">

<?php include(ROOT_PATH . "/bp-admin/includes/navbar.php"); ?>
        


  
<?php
switch($_GET['posts']) 
{
    case 'all':
       include(ROOT_PATH . "/bp-admin/posts.php");
        break;
    case 'edit':
       include(ROOT_PATH . "/bp-admin/posts-edit.php");
        break;
    case 'new':
       include(ROOT_PATH . "/bp-admin/post-new.php");
        break;
    case 'topics':
       include(ROOT_PATH . "/bp-admin/topics.php");
        break;
        break;
    case 'topics-edit':
       include(ROOT_PATH . "/bp-admin/topics-edit.php");
        break;

}
?>
                    


    </body>

</html>