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

	<link rel="stylesheet" type="text/css" href="build/css/demo.css">

	<link rel="stylesheet" type="text/css" href="build/css/intlTelInput.css">

     <!--jquery-->
     <script src="https://code.jquery.com/jquery-3.6.4.js"integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="crossorigin="anonymous">
     </script>
</head>
<body>

	<div class="container mt-5">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center text-white">registration</h1>
				<div class="registration-box">
					<form action="savedata.php" method="post">
						<div class="row">
							<div class="col-md-6  mb-4">
								<label class="form-label">first name</label>
								<input type="text" name="fname" class="form-control">
							</div>
							<div class="col-md-6 mb-4">
								<label class="form-label">last name</label>
								<input type="text" name="lname" class="form-control">
							</div>
							<div class="col-md-12 mb-4">
								<label class="form-label">address</label>
								<textarea class="form-control textarea" name="address"></textarea>
							</div>
							<div class="col-md-6 mb-4">
								<label class="form-label">mobile</label>
								<input type="number"class="form-control" name="phone" id="phone" >
							</div>
							<div class="col-md-6 mb-4">
								<label class="form-label">email</label>
								<input type="email" name="email" class="form-control">
							</div>
							<div class="row">
								<label class="form-label">gender</label>
								<div class="col-md-4 mb-4">
									<input type="radio" name="gender" value="male"  class="radio-btn">
									<label class="form-label">male</label>
								</div>
								<div class="col-md-4 mb-4">
									<input type="radio" name="gender" value="female" class="radio-btn">
									<label class="form-label">female</label>
								</div>
								<div class="col-md-4 mb-4">
									<input type="radio" name="gender" value="other" class="radio-btn" >
									<label class="form-label">other</label>
								</div>
							</div>
							<div class="col-md-6 mb-4">
								<label class="form-label">password</label>
								<input type="number" name="password" class="form-control">
							</div>
							<div class="col-md-6 mb-4">
								
							</div>
							<div class="col-md-6 mb-4 mt-3">
								<input type="submit" name="submit" class="submit-btn">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

<!--boostrap js-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

<!--flag plugin js-->

<script src="build/js/intlTelInput.js"></script>

<script type="text/javascript">
	var input = document.querySelector('#phone');
	window.intlTelInput(input,{});
</script>

<script src="assets/js/jquery.js"></script>
</body>
</html>