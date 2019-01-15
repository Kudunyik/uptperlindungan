<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Halaman Login</title>
</head>
<body>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css_login.css">

<div id="container">
	<h1>Silahkan Login</h1>
	<?php echo $this->session->flashdata('err') ?> 
	<div id="body">
		<form action="<?php echo site_url('welcome/login')?>" method="POST">
			<input type="text" name="user" placeholder="Masukkan Username">
			<input type="Password" name="pass" placeholder="Masukkan Password">
			<input type="submit" name="login" value="Login" ">
		</form>
	</div>
</div>

</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css_login.css">
  <!------ Include the above in your HEAD tag ---------->

  <div class = "container">
    <div class="wrapper">
      <form action="<?php echo site_url('welcome/login')?>" method="POST" name="Login_Form" class="form-signin">       
        <h3 class="form-signin-heading">Selamat Datanga! Silahkan Log In</h3>
        	<?php echo $this->session->flashdata('err') ?> 
        <hr class="colorgraph"><br>
        
        <input type="text" class="form-control" name="user" placeholder="Masukkan Username" required="" autofocus="" />
        <input type="password" class="form-control" name="pass" placeholder="Masukkan Password" required=""/>          

        <button class="btn btn-lg btn-primary btn-block"  name="login" value="Login" type="submit">Login</button>        
      </form>     
    </div>
  </div>
</body>
</html>