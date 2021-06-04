<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Dadi Resik</title>
	<link rel="icon" href="<?= base_url(); ?>assets/img/home/img/logo1.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/home/css/bootstrap.min.css">
	<!-- animate CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/home/css/animate.css">
	<!-- owl carousel CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/home/css/owl.carousel.min.css">
	<!-- themify CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/home/css/themify-icons.css">
	<!-- flaticon CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/home/css/flaticon.css">
	<!-- font awesome CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/home/css/magnific-popup.css">
	<!-- swiper CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/home/css/slick.css">
	<!-- style CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/home/css/style.css">
</head>

<body>
	<!--::header part start::-->
	<header class="main_menu home_menu">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<nav class="navbar navbar-expand-lg navbar-light">
						<a class="navbar-brand" href="<?= base_url(); ?>"> <img src="<?= base_url(); ?>assets/img/home/img/logo1.png" alt="logo" style="width: 150px; height:90px;"> </a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse main-menu-item justify-content-end" id="navbarSupportedContent">
							<ul class="navbar-nav align-items-center">
								<?php foreach ($MenuUser as $mu) : ?>
									<?php if ($title == $mu['title']) : ?>
										<!-- Nav Item - Charts -->
										<li class="nav-item active">
										<?php else : ?>
										<li class="nav-item">
										<?php endif; ?>
										<a class="nav-link pb-0" href="<?= base_url($mu['url']); ?>">
											<span><?= $mu['title']; ?></span></a>
										</li>

									<?php endforeach; ?>
									<li class="d-none d-lg-block">
										<?php if ($this->session->userdata('email')) : ?>

											<a class="btn_1" href="<?= base_url('auth/logout') ?>">
												<?= $user['nama']; ?></a>
									</li>
								<?php else : ?>
									<li class="d-none d-lg-block">
										<a class="btn_1" href="<?= base_url('auth/index'); ?>">Daftar Sekarang</a>
									</li>
								<?php endif; ?>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Header part end-->