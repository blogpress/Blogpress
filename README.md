### BlogPress will always be an open source so that everyone can use it. All interested developers are requested to work on any one of the following features and help grow the blogpress 👋

1. Plugins System
2. Theme System
3. Own Content Editor
4. Block Editor System
5. Widget System
6. Script Installation Page Devlopment
7. Script, Plugins, Theme Licence System Devlopment
8. API Feature Devlopment for Theme API, Plugin API
9. Setting API Devlopment
10. Wordpress like Theme & Plugin API Devlopment for Theme Installation and Plugin Insatlltion direct from Blogpress official website.
11. Redesigne mysql table for post including #hashtag and also update controller mentioned in bp-includes/controller
12. All Controllers in bp-includes folder
13. Local language translation 


##The first version of the current BlogPress includes these things or features

1. Post - All Post, Add New Post, Topics
2. Media - Library, Add New
3. Comments
4. Pages - All Pages, Add New Pages
5. Users - All Users, Add New Users
6. Apperance - All Themes, Add New Themes
7. Plugins - Installed Plugins, Add New Plugins
8. Settings

## path.php - Main core function is mentioned in this file. 

define("ROOT_PATH", realpath(dirname(__FILE__)));
define("BASE_URL", "http://127.0.0.1/wordkwik/");
define ('THEME_DIR',BASE_URL .'/bp-content/themes');
define ('uploads_url',BASE_URL .'/bp-content/uploads/');
define ('ADMIN_URL',BASE_URL .'bp-admin');
define ('BLOGPRESS_JS',BASE_URL .'bp-admin/includes/js/');
define ('BLOGPRESS_CSS',BASE_URL .'bp-admin/includes/css/');
define ('BLOGPRESS_LOGO',BASE_URL .'bp-admin/includes/img/');
define('THEME', 'classic');
define('VERSION', '5.0.0');
define('LANGUAGE', 'hi');
include(ROOT_PATH . "/bp-admin/translation/".LANGUAGE.".php"); 
//SOCIAL LOGIN//
define('CONSUMER_KEY', 'f56lg5ZxXQyAnlkaAVvlG7sKS');
define('CONSUMER_SECRET', 'J06Int1cRnnh9g2eQFt8mdRV2gE85qxOCkFlL5s197YNCUDmZo');
define('OAUTH_CALLBACK', 'http://127.0.0.1/wordkwik/bp-admin/login/process.php');

We define mostly function in this file and this is an important file for this script.

## wk_function.php - please devlop all function in this file 

function the_title(){
echo html_entity_decode($post['title']); }

This code use in theme like wordpress to fetch post title

<?php the_title();?>


function get_header() { include(THEME_DIR . "/".THEME."/header.php"); } 
function get_footer() { include(THEME_DIR . "/".THEME."/footer.php"); }


Used <?php get_header();?> for Loading template header.php file and <?php get_footer();?> for loading footer.php 

Please devlop all similar things in wk_seetings.php and make Blogpress better in next version.


## Editor - CKEditor 

We used Ck Editor 5 as an default content editor in our Blogpress. Please devlop an own Editor for our script and also devlop wordpress like Block Editor.

<!--
**blogpress/Blogpress** is a ✨ _special_ ✨ repository because its `README.md` (this file) appears on your GitHub profile.

Here are some ideas to get you started:

- 🔭 I’m currently working on ...
- 🌱 I’m currently learning ...
- 👯 I’m looking to collaborate on ...
- 🤔 I’m looking for help with ...
- 💬 Ask me about ...
- 📫 How to reach me: ...
- 😄 Pronouns: ...
- ⚡ Fun fact: ...
-->
