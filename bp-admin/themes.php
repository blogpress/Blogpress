<?php 
include("../path.php");?>
<?php include(ROOT_PATH . "/bp-includes/controllers/posts.php"); 
adminOnly();
?>
<?php
/**
 @ Version : 1.0.0
 @ Function: Main Template data read and show in Theme section. 
 @ Contributer : Wordkwik
**/

$sys['theme']= "theme1";//this value can be fetched from database

function getThemeData($file, $headers = array("name" => "Name")) {
    $file_data = file_get_contents($file);

    foreach ($headers as $field => $regex) {
        if (preg_match('/^[ \t\/*#@]*' . preg_quote($regex, '/') . ':(.*)$/mi', $file_data, $match) && $match[1]) {
            $headers[$field] = $match[1];
        } else {
            $headers[$field] = '';
        }
    }

    return $headers;
}

function getThemes() {
    global $sys;
    $themes = array();
    $dirs = glob('../bp-content/themes/*', GLOB_ONLYDIR);
    foreach ($dirs as $dir) {
        $screenshot = file_exists($dir . "/screenshot.png") ? $dir . "/screenshot.png" : "http://via.placeholder.com/400x400?text=No%20Screenshot";
        $theme = array(
            'path' => $dir,
            'folder' => basename($dir),
            'screenshot' => $screenshot,
            'name' => basename($dir)
        );
        if (file_exists($dir . "/style.css")) {
            $theme_info = getThemeData($dir . "/style.css", array("name" => "Name", "author" => "Author", "description" => "Description", "version" => "Version"));
            $theme['name'] = $theme_info['name'];
            $theme['author'] = $theme_info['author'];
            $theme['description'] = $theme_info['description'];
            $theme['version'] = $theme_info['version'];
        }

        $themes[] = $theme;
    }
    return $themes;
}
/** This code can be placed in another php file * */

$msg = "";
if (isset($_REQUEST['activate']) && trim($_REQUEST['activate'])) {
    $current_theme = filter_var(trim($_REQUEST['activate']), FILTER_SANITIZE_STRING);

/**
 @ Version : 1.0.0
 @ Function: Show theme status in Theme Section
 @ Contributer : Mukesh Yadav
**/

    $sys['theme'] = $current_theme;
    $msg = '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Theme Activated</h4>' . $current_theme . ' is now activated successfuly.</div>';
}
$themes = getThemes();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $admin_theme_header; ?> - <?php echo $code; ?></title>
        

    </head>

<body class="hold-transition skin-scriptlog sidebar-mini">


        <?php include(ROOT_PATH . "/bp-admin/includes/navbar.php"); ?>




<?php
switch($_GET['load']) 
{
    case 'template':
       include(ROOT_PATH . "/bp-admin/template.php");
        break;
    case 'new':
       include(ROOT_PATH . "/bp-admin/plugins.php");
        break;

}
?>

                    <?php include(ROOT_PATH . '/bp-admin/includes/footer.php'); ?>
  