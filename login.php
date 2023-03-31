<?php
if(isset($_POST['login'])){
	include "config.php";
	
	$fname =($_POST['fname']);

	$password  =($_POST['password']);

	$sql = "SELECT id,firstname FROM login_table WHERE firstname  ='{$fname}' AND password  = '{$password}'";

	$result=mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)){

		while($row = mysqli_fetch_assoc($result)){

			session_start();

				$_SESSION["firstname"] = $row['firstname'];
				$_SESSION["id"] = $row['id'];

				header("Location:http://localhost/admin_login_page/admin-panel/admin/index.php");
				
			}
		}else{
			echo '<div class="alert alert-danger">username and password don\'t match</div>';
		}
	}
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<!--css link -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <!--jquery-->
     <script src="https://code.jquery.com/jquery-3.6.4.js"integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="crossorigin="anonymous">
     </script>
 </head>
 <body>

 	<!--login page start-->
 	<div class="container pt-5">
 		<div class="row">
 			<div class="col-lg-4 col-md-12">
 				<form action="" method="post" class="shadow-lg">
 					<a href=""><img src="https://www.lttrbxtech.com/public/images/media/1647090757Dark_png.png" class="img-fluid mb-4"></a>
 					<div class="mb-4">
 						<label for="username" class="form-label">userName</label>
 						<!-- <span class="form-icon"><i class="fa fa-user"></i></span> -->
 						<input type="text" class="form-control" name="fname" placeholder="enter your name">
 					</div>
 					<div class="mb-4">
 						<label for="password" class="form-label">Password</label>
 						<!-- <span class="form-icon"><i class="fa fa-lock"></i></span> -->
 						<input type="number" class="form-control" name="password" placeholder="Enter your password">
 					</div>
 					<div class="row">
 						<div class="col-md-6">
 							<input type="submit" name="login" class="submit-btn">
 						</div>
 						<div class="col-md-6">
 							<span class="forget-pass"><a href="#" class="text-decoration-none">Forget password ?</a></span>
 						</div>
 					</div>
 					<div class="row mt-5">
 						<div class="col">
 							<h6 class="text-white text-center">don't have account <a href="registration.php" class="text-decoration-none"> register</a></h6>
 						</div>
 					</div>
 				</form>
 			</div>
 		</div>
 	</div>
 	<!--login page end-->

<!--boostrap js-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

<script src="assets/js/jquery.js"></script>
</body>
</html>