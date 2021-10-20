<?php include('path.php'); ?>
<?php include(ROOT_PATH . "/bp-includes/controllers/users.php"); 
guestsOnly();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">


<style type="text/css">
body{
font-family: 'Lato', sans-serif;
position: relative;
background: #3DA6D4;
margin: 0px;
}
.main-section{
width: 460px;
position: fixed;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
}
.content-section{
background: #FFF;
border-radius: 2px;
box-shadow: 0px 0px 0px 8px rgba(0,0,0,0.1);
}
.head-section{
background: #F3F3F3;
text-align: center;
padding: 15px 0px;
border-bottom: 1px solid #CECECE;
}
.head-section h3{
margin: 0px;
color: #565656;
}
.body-section{
padding:15px 30px 30px 30px;
overflow: hidden;
}
.body-section .form-input{
width: 100%;
padding: 15px 0px;
}
.body-section .form-input input[type='text']{
width: calc(100% - 30px);
border: 1px solid #D3D3D3;
border-radius: 1px;
padding:10px 10px;
box-shadow: 0px 0px 0px 5px rgb(239,244,247);
}

.body-section .form-input input[type='email']{
width: calc(100% - 30px);
border: 1px solid #D3D3D3;
border-radius: 1px;
padding:10px 10px;
box-shadow: 0px 0px 0px 5px rgb(239,244,247);
}

.body-section .form-input input[type='password']{
width: calc(100% - 30px);
border: 1px solid #D3D3D3;
border-radius: 1px;
padding:10px 10px;
box-shadow: 0px 0px 0px 5px rgb(239,244,247);
}
.body-section .form-input input[type='checkbox']{
float: left;
}
.body-section label{
color: #565656;
padding: 1px 5px;
float: left;
}
.body-section .btn-submit{
float: right;
background: #DEEDF4;
border:1px solid #B5CBCD;
color: #56778E;
font-weight: bold;
padding:7px 20px;
border-radius: 15px;
}
.footer-section{
color: #F1F1F1;
text-align: center;
padding-top: 15px;
font-size: 12px;
}
.footer-section a{
color: #fff;
font-weight: bold;
text-decoration: none;
}
</style>
  <title>Login</title>
</head>

<body>

<div class="main-section">
<div class="content-section">
<div class="head-section">
<h3>
<a href="https://blogpress.org" alt="Blogpress" target="_new">
<img style="width:50px;height:50px;" src="<?php echo ADMIN_URL . '/includes/img/favicon.png' ?>"?>
</a>
<div class="body-section">
    <form action="login.php" method="post">
   

  <div style="color:red;font-weight:bold;">
    <?php include(ROOT_PATH . "/bp-includes/helpers/formErrors.php"); ?>
</div>

 <div class="form-input">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
      </div>
<div class="form-input">
        <label>Password</label>
        <input type="password" name="password" value="<?php echo $password; ?>"  placeholder="Password">
      </div>
   <div class="form-input">
        <button type="submit" name="login-btn" class="btn-submit">Login</button>
      </div>
   <a href="<?php echo ADMIN_URL . '/login/process.php' ?>">Login with Twitter</a>
</div>
</form>
</div>
</div>

<div class="footer-section">
Or <a href="<?php echo BASE_URL . 'register.php' ?>">Sign Up</a>  | <a href="<?php echo BASE_URL . '' ?>">Back to Home</a></span>
</div>

</body>

</html>