<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/bp-includes/controllers/pages.php");

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $page;?> - <?php echo $code;?></title>
        
        <?php get_meta(); ?>
    </head>

<body class="hold-transition skin-scriptlog sidebar-mini">
        <?php include(ROOT_PATH . "/bp-admin/includes/navbar.php"); ?>
<?php
switch($_GET['load']) 
{
    case 'all':
       include(ROOT_PATH . "/bp-admin/pages-all.php");
        break;
    case 'edit':
       include(ROOT_PATH . "/bp-admin/pages-edit.php");
        break;
    case 'new':
       include(ROOT_PATH . "/bp-admin/pages-new.php");
        break;

}
?>

     <?php include(ROOT_PATH . '/bp-admin/includes/footer.php'); ?>
  