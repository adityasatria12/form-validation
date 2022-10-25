
<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<!-- membuat validasi login -->
	<?php
	if(isset($_POST['proseslog'])){
		$user = $_POST('user');
		$pass = $_POST('pass');

		if($user == 'admin' and $pass == '1234'){
			header("location:media.php");
		
		}else{
			echo"
			<script>
			alert('Maaf Username dan Password salah!!');
			window.location.href='index.php;
			</script>";
		}
	}
	?>

	<img class="wave" src="img/wave.svg"> <!--menampilkan gelombang dibawah-->
	
	<div class="container"> <!--Membungkus Form Login-->
		<div class="img">
			<img src="img/kucing.png">
		</div>
		<div class="login-content">
			<!-- membuat form username dan password -->
			<form method="POST" action="<?php
			$_SERVER['PHP_SELF']; ?>">
				<img src="img/cakar.png">
				<h2 class="title">Welcome Cat Lovers</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="username">	   
					</div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password">
						<span class="show-pass">
						   <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor"
						   xmlns="http://www.w3.org/2000/svg">
						   <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
						   <path fill-rule="evenodd"
							   d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
					   		</svg>
						</span>
						<span class="hide-pass">
							<img src="img/hide.svg" alt="hide">
						 </span>
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="submit" name="proseslog">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
