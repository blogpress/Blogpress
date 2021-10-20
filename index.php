<?php 
error_reporting(E_ERROR | E_PARSE);
include("path.php");include("wk_function.php");
include(ROOT_PATH . "/bp-includes/controllers/topics.php");
$posts = array();
$postsTitle = 'Recent Posts';
if (isset($_GET['t_id'])) {
  $posts = getPostsByTopicId($_GET['t_id']);
  $postsTitle = "You searched for posts under '" . $_GET['name'] . "'";
} else if (isset($_POST['search-term'])) {
  $postsTitle = "You searched for '" . $_POST['search-term'] . "'";
  $posts = searchPosts($_POST['search-term']);
} else {
  $posts = getPublishedPosts();
}

$include= ROOT_PATH . "/bp-content/themes/".THEME ."/index.php";
if (include($include)){
    echo "";
}else{
    echo "<center><div style='position:fixed;top:50%;left:50%;margin-top:-9em;margin-left:-15em;border:1px dotted #ddd;width:300px;padding:10px;font-size:17px;' align='center'>TEMPLATE NOT FOUND</div></center>";
}
