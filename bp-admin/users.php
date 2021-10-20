<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/bp-includes/controllers/users.php"); 
adminOnly();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $dashboard; ?> - <?php echo $code; ?></title>
        
        <?php get_meta();?>
    </head>

<body class="hold-transition skin-scriptlog sidebar-mini">

        <?php include(ROOT_PATH . "/bp-admin/includes/navbar.php"); ?>
 
<?php
switch($_GET['load']) 
{
    case 'all':
       include(ROOT_PATH . "/bp-admin/users-all.php");
        break;
    case 'new':
       include(ROOT_PATH . "/bp-admin/users-new.php");
        break;
    case 'edit':
       include(ROOT_PATH . "/bp-admin/users-edit.php");
        break;

}
?>



     <?php include(ROOT_PATH . '/bp-admin/includes/footer.php'); ?>
   