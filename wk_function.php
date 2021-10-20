<?php
/**
 @ Version : 1.0.0
 @ Function: Load header.php in Template including footer.php
 @ Contributer : Wordkwik Team
**/

function get_header() { include(THEME_DIR . "/".THEME."/header.php"); } 
function get_footer() { include(THEME_DIR . "/".THEME."/footer.php"); }

/**
 @ Version : 1.0.0
 @ Function: Show Latest Post Thumbnail default image in Template
 @ Contributer : Blogpress
**/

function get_post_image() { echo (BASE_URL . "/bp-content/uploads/"); }

/**
 @ Version : 1.0.0
 @ Function: Load LanguageFile
 @ Contributer : Mukesh Yadav
**/

function load_menu() { include(ROOT_DIR . "/bp-includes/api/menu-api.php"); }
function get_permalink(){
echo'';
}
function the_title(){
echo html_entity_decode($post['title']);
}
