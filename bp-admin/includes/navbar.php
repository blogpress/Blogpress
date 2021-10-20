<?php
function load_menu() { include(BASE_URL . "/bp-includes/api/menu-api.php"); }
?>

<div class="wrapper">
   <!-- Main Header -->
  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img style="height:50px;width:50px;" alt="logo-Wirepress-50x50" src="<?php echo (BLOGPRESS_LOGO . "favicon.png");?>"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img style="height:60px;width:230px;" alt="logo-Wirepress-90x50" src="<?php echo (BLOGPRESS_LOGO . "logo.png");?>"></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <i class="fa fa-user-o"></i>
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Administrator</span>
            </a>
            <ul class="dropdown-menu">
             
              <!-- Menu Body -->
           <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="<?php echo BASE_URL . '/index.php' ?>"></a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="<?php echo BASE_URL . '/index.php' ?>"></a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="<?php echo BASE_URL . '/index.php' ?>"></a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href=""
                  class="btn btn-default btn-flat"><i class="fa fa-user fa-fw"></i><?php echo $profile; ?></a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo ADMIN_URL . '/logout.php' ?>" class="btn btn-default btn-flat"><i class="fa fa-sign-out fa-fw"></i><?php echo $signout; ?></a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="<?php echo BASE_URL . '/index.php' ?>" title="<?php echo $site; ?> <?php echo $view; ?>" target="_blank"><i class="fa fa-home"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  
 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel"></div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><?php echo $navigation;?></li>
        <!-- Optionally, you can add icons to the links -->
        <li class="treeview">
          <a href="<?php echo ADMIN_URL . '/dashboard.php' ?>"><i class="fa fa-dashboard"></i> 
          <span><?php echo $dashboard;?></span></a>
          </li>
 <li class="treeview <?php if ($bpmenu=="index") {echo "active"; } 
     else{echo"noactive";}?>">
          <a href="<?php echo ADMIN_URL . '/index.php?posts=all' ?>"><i class="fa fa-thumb-tack"></i> 
          <span><?php echo $posts_all;?></span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          
          <ul class="treeview-menu">

             <li><a href="<?php echo ADMIN_URL . '/index.php?posts=all' ?>"><?php echo $posts_all;?></a></li>
            <li><a href="<?php echo ADMIN_URL . '/index.php?posts=new' ?>"><?php echo $add_new;?></a></li>                        
             <li><a href="<?php echo ADMIN_URL . '/index.php?posts=topics' ?>"><?php echo $topic_all;?></a></li>

          </ul>

        </li>

      


        <li class="treeview <?php echo basename($_SERVER['PHP_SELF']) == 'media/index.php' ? 'active' : '';?>">
          <a href="<?php echo ADMIN_URL . '/media/index.php' ?>"><i class="fa fa-image"></i> 
          <span><?php echo $media;?></span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          
          <ul class="treeview-menu">

             <li><a href="<?php echo ADMIN_URL . '/gallery.php' ?>"><?php echo $library;?></a></li>                        
             <li><a href="<?php echo ADMIN_URL . '/topics/index.php' ?>"><?php echo $add_new;?></a></li>
            
          </ul>

        </li>


        <li class="treeview <?php if ($bpmenu=="comments") {echo "active"; } 
     else{echo"noactive";}?>">
        <a href="<?php echo ADMIN_URL . '/comments/index.php' ?>"><i class="fa fa-comments"></i> 
        <span><?php echo $comments;?></span></a>
        </li>



         <li class="treeview <?php if ($bpmenu=="pages") {echo "active"; } 
     else{echo"noactive";}?>">
          <a href="<?php echo ADMIN_URL . '/pages.php?load=all' ?>"><i class="fa fa-clone"></i> 
          <span><?php echo $pages;?></span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo ADMIN_URL . '/pages.php?load=all' ?>"><?php echo $pages_all;?></a></li>
            <li><a href="<?php echo ADMIN_URL . '/pages.php?load=new' ?>"><?php echo $add_new;?></a></li>
          </ul>
        </li>
        


       <li class="treeview <?php if ($bpmenu=="users") {echo "active"; } 
     else{echo"noactive";}?>">
          <a href="<?php echo ADMIN_URL . '/users.php' ?>"><i class="fa fa-user"></i> 
          <span><?php echo $users;?></span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            
             <li><a href="<?php echo ADMIN_URL . '/users.php?load=all' ?>"><?php echo $users_all;?></a></li>
            <li><a href="<?php echo ADMIN_URL . '/users.php?load=new' ?>"><?php echo $add_new;?></a></li>   

          </ul>
        </li>
        
        <li class="treeview <?php if ($bpmenu=="themes") {echo "active"; } 
     else{echo"noactive";}?>">
          <a href="#"><i class="fa fa-paint-brush"></i> 
          <span><?php echo $appearance;?></span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo ADMIN_URL . '/themes.php?load=template' ?>"><?php echo $theme;?></a></li>
            <li><a href="<?php echo ADMIN_URL . '/themes.php?load=new' ?>"><?php echo $add_new;?></a></li>
          </ul>
        </li>

        <li class="treeview <?php if ($bpmenu=="plugins") {echo "active"; } 
     else{echo"noactive";}?>">
          <a href="<?php echo ADMIN_URL . '/plugins.php' ?>"><i class="fa fa-plug"></i> 
          <span><?php echo $plugins;?></span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo ADMIN_URL . '/plugins.php' ?>"><?php echo $installed;?> <?php echo $plugins;?></a></li>
            <li><a href="<?php echo ADMIN_URL . '/plugins-install.php' ?>"><?php echo $add_new;?></a></li>
          </ul>
        </li>

        <li class="<?php if ($bpmenu=="settings") {echo "active"; } 
     else{echo"noactive";}?>">
        <a href="<?php echo ADMIN_URL . '/settings.php' ?>"><i class="fa fa-sliders"></i> 
        <span><?php echo $settings;?></span></a>
        </li>
<?php load_menu();?>
<?php
if($kwik_current >= $kwik_latest) {
    echo " <li class=header>
 $latest <span class='badge badge-primary'><i class='fas fa-check'></i></span>
</li>";
} else {
    echo " <li class='header'>
$bpversion <span class='badge badge-danger'>$version - $kwik_latest</span>
</li>";
}

?>  
</li>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>