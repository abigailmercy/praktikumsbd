<?php include("connect.php"); ?>
<!DOCTYPE html> 
<html lang="en">
	<head> 
		<title>Praktikum SBD Modul 4</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

		<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
		<link href="assets/css/font-awesome.css" rel="stylesheet" />
		<link href="assets/css/custom.css" rel="stylesheet" />

		<link rel="stylesheet" href="assets/css/bootstrap.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		 
		<script type='javascript' src="assets/js/bootstrap.min.js"></script>
	</head>

	
	<body style="background-color : #fafafa;">
		<br><br>
  			<header class="main-header">
			   <center><h1 class="blog-title">CRUD Sederhana dengan PHP dan MYSQL</h1></center>
			   <center><h4 class="blog-title">Praktikum Sistem Basis Data 2017</h4></center>
			</header><br><br>
			 <hr>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">

        <?php
        if($_POST['login']){
          $user   = $conn->real_escape_string($_POST['username']);
          $pass   = md5($conn->real_escape_string($_POST['password']));

          $sql = $conn->query("SELECT * FROM user WHERE username='$user' AND password='$pass'");
          if($sql->num_rows > 0){
            $_SESSION['user'] = $user;
            header("Location: mahasiswa.php");
          }else{
            echo '<div class="alert alert-danger">Login Gagal.</div>';
          }
        }
        ?>

        <form class="form-horizontal" method="post">
          <div class="form-group">
            <label class="col-md-4 control-label">Username</label>
            <div class="col-md-8">
              <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Password</label>
            <div class="col-md-8">
              <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">&nbsp;</label>
            <div class="col-md-8">
              <input type="submit" name="login" class="btn btn-primary" value="Login">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">&nbsp;</label>
            <div class="col-md-8">
              Belum Punya Akun? <a href="register.php">Register</a>
            </div>
          </div>
        </form>
      </div>
    </div>
    <hr>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
	</body>        
</html>
