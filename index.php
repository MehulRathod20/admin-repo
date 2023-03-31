
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>index</title>

	<!--css-link-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

	<link rel="stylesheet" type="text/css" href="assets/css/style2.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

	<!--responsive-->
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

	<!--boostrap cdn-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	</head>
<body>
	
	<!--Header end -->
	<nav class="navbar navbar-expand-lg shadow py-2">
		<div class="container">
			<?php

				include "config.php";

				$sql="SELECT * FROM headerimage";

				$result=mysqli_query($conn,$sql)or die("sql query failed");

				if (mysqli_num_rows($result)>0) {

					?>
			<a class="navbar-brand" href="#">
				<?php
					while($row=mysqli_fetch_assoc($result)){
					?>
				<img src="<?php echo $row['image'];?>" class="img-fluid">
				<?php
			}
				?>
			</a>
		<?php }?>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<?php

				include "config.php";

				$sql="SELECT * FROM headermenu";

				$result=mysqli_query($conn,$sql)or die("sql query failed");

				if (mysqli_num_rows($result)>0) {

					?>
				<ul class="navbar-nav m-auto mb-2 mb-lg-0">
					<?php
					while($row=mysqli_fetch_assoc($result)){
					?>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#"><?php echo $row['menu'];?></a>
					</li>
					
					<?php
				}
					?>
				</ul>
				<?php
			}
				?>
			</div>
		</div>
	</nav>
	<!--boostrap script-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>