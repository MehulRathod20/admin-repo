
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>index</title>

	<link rel="icon" href="https://lttrbxtech.com/public/images/media/1647195519LTTRBX-MONO-WEB-DEVELOPMENT-AHMEDABAD.jpg" type="image/x-icon">

	<!--css-link-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

	<link rel="stylesheet" type="text/css" href="assets/css/style2.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

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
						<img src="admin-panel/admin/upload/<?php echo $row['image'];?>" class="img-fluid">
						<?php
					}
					?>
				</a>
			<?php 
		}
		?>
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

	<!--main section-->
	<section class="main" id="main">
		<div class="container">
			<div class="row">
				<!-- Swiper -->
				<?php

				include 'config.php';

				$sql="SELECT * FROM slider";

				$result=mysqli_query($conn,$sql);

				if (mysqli_num_rows($result)) {

					?>
					<div class="swiper mySwiper">
						<div class="swiper-wrapper">
							<?php
							while($row=mysqli_fetch_assoc($result)){
								?>
								<div class="swiper-slide">
									<img src="admin-panel/admin/upload/<?php echo $row['slider_img'];?>" class="" width="250px" height="200px">
								</div>
								<?php
							}
							?>
						</div>
					</div>
					<?php
				}
			?>
		</div>
	</div>
</section>

	<!--footer start-->
	<section class="footer py-4 mt-5">
		<div class="container">
			<div class="row">
				<div class="d-flex justify-content-between">
					<div></div>
					<div>
						<?php
						include "config.php";
						$sql="SELECT * FROM headerimage";
						$result=mysqli_query($conn,$sql)or die("sql query failed");
						if (mysqli_num_rows($result)>0) {
							while($row=mysqli_fetch_assoc($result)){
								?>
						<img src="admin-panel/admin/upload/<?php echo $row['footer_image'];?>" class="img-fluid" alt="demo" width="170px" height="50px">
						<?php
					}
				}
				?>
					</div>
					<div class="">
					</div>
				</div>
			</div>

			<div class="row mt-5">
				<?php
						include "config.php";
						$sql="SELECT headermenu.menu FROM headermenu LEFT JOIN footermenu ON  footermenu.link ORDER BY footermenu.id";

						$result=mysqli_query($conn,$sql)or die("sql query failed");
						if (mysqli_num_rows($result)>0) {
							while($row=mysqli_fetch_assoc($result)){
								
								?>
						<div class="col-md-2">
							<div class="footer-menu">
								<ul>
									<li class="list-style-none"><a href="#"><?php echo $row['menu'];?></a></li>
								</ul>
							</div>
						</div>
						<?php
					}
				}
				?>
				   <div class="col-md-2">
					<div class="social-icon">
						<a href="#"><i class="fa-brands fa-whatsapp"></i></a>
					</div>
				</div> 
			</div>
		</div>
	</section>	
	<div class="container mt-3">
		<div class="row">
			<div class="copyright">
				
				<div class="col-md-12 text-center">
					<i class="fa fa-copyright"></i>
					<?php

					include "config.php";

					$sql="SELECT * FROM footermenu";

					$result=mysqli_query($conn,$sql)or die("sql query failed");

					if (mysqli_num_rows($result)>0) {

						while($row=mysqli_fetch_assoc($result)){
							?>
							<small><?php echo $row['copyright'];?></small>
							<?php
						}
					}
					?>
				</div>
			</div>
		</div>
	</div>




<!--boostrap script-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
 <!-- Initialize Swiper -->
 <script>
    var swiper = new Swiper(".mySwiper", {

    	 direction: 'horizontal',
       parallax: true,
       slidesPerView: 4,
       speed: 600,
       autoHeight: true,
       spaceBetween: 30,
       autoplay: {
       delay: 500,
       disableOnInteraction: false,
      },
        

    });
  </script>
 
</body>
</html>