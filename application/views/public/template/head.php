<!DOCTYPE html>
<html>

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $title; ?></title>
	<link rel="icon" href="<?= base_url(); ?>assets/img/home/img/favicon.png">
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
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/home/css/font-awesome.min.css" />
	<!-- swiper CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/home/css/slick.css">
	<!-- style CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/home/css/style.css">
	<!-- slider -->
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
	<!-- login & register -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/login/fonts/material-icon/css/material-design-iconic-font.min.css' ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/login/css/style.css' ?>">
	<!-- end -->
	<!-- PEMESANAN -->
	<style>
		body {
			height: 100%;
			width: 100%;
			margin: 0;
			padding: 0;

			font-family: "Roboto", "Helvetica", sans-serif;

			transition: background-color 0.2s;
			will-change: background-color;
		}

		.inspired-by {
			display: block;
			position: relative;
			margin-bottom: 15px;
			text-align: center;
			color: #fff;
			font-size: 14px;
		}

		.wrapper {
			position: relative;
			overflow-x: hidden;
			width: 100%;
			height: 100%;
		}

		.card {
			display: block;
			position: absolute;
			top: 25px;
			margin: 0 auto;
			width: 350px;
			background-color: #fff;
			border-radius: 15px;

			box-shadow: 0 30 50 rgba(0, 0, 0, 0.2);

			transform: translateX(-50%);
			transition: left 0.5s ease-out;
			will-change: left;

			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			-o-user-select: none;
			user-select: none;
		}

		.card--19 {
			left: 50%;
		}

		.card--solstice,
		.card--huarache {
			left: 150%;
		}

		.card__header {
			position: relative;
			height: 170px;
			padding: 30px 30px 300px;
			border-top-right-radius: 15px;
			border-top-left-radius: 15px;
			color: #fff;
		}

		.card__header--19 {
			background-color: #F72648;
			background-image: linear-gradient(#F72648, #FCCB3C);

			background: #F72648;
			background: linear-gradient(#F72648, #FCCB3C);
		}

		.card__header--solstice {
			background-color: #3CA3FC;
			background-image: linear-gradient(#3CA3FC, #FFD300);

			background: #3CA3FC;
			background: linear-gradient(#3CA3FC, #FFD300);
		}

		.card__header--huarache {
			background-color: #26C9F7;
			background-image: linear-gradient(#26C9F7, #DFFC3C);

			background: #26C9F7;
			background: linear-gradient(#26C9F7, #DFFC3C);
		}

		.card__watermark {
			overflow: hidden;
			position: absolute;
			bottom: 10px;
			left: 0;
			width: 100%;
		}

		.card__watermark::after {
			content: attr(data-watermark);
			position: relative;
			left: -20px;
			color: rgba(0, 0, 0, .3);
			font-size: 240px;
			font-weight: 700;
			text-transform: uppercase;
		}

		.card__logo {
			width: 50px;
			height: auto;
		}

		.card__price {
			float: right;
			font-size: 16px;
			font-weight: 300;
		}

		.card__title {
			margin: 35px 0 20px;
			font-size: 15px;
			line-height: 1.1em;
			text-transform: uppercase;
			letter-spacing: 1.5px;
		}

		.card__subtitle {
			display: block;
			font-size: 13px;
			font-weight: 300;
		}

		.card__body {
			position: relative;
			padding: 40px 30px 20px;
		}

		.card__image {
			z-index: 1;
			position: absolute;
			top: -290px;
			left: -30px;
			width: 125%;

			user-select: none;
			-moz-user-select: none;
			-webkit-user-drag: none;
			-webkit-user-select: none;
			-ms-user-select: none;
		}

		.card__wish-list {
			display: block;
			width: 50%;
			margin: 0 auto 15px;
			padding: 15px;
			border: 2px solid #fff;
			border-radius: 20px;
			text-align: center;
			text-transform: uppercase;
			font-size: 14px;
		}

		.card__wish-list--19 {
			color: #8850FF;
			border-color: #8850FF;
		}

		.card__wish-list--solstice {
			color: #FFBA00;
			border-color: #FFBA00;
		}

		.card__wish-list--huarache {
			color: #26C9F7;
			border-color: #26C9F7;
		}

		.card__category {
			display: block;
			font-size: 12px;
			color: #AEAEAE;
			text-transform: uppercase;
			text-align: center;
		}

		.card__will-animate {
			will-change: transform;
		}

		.cards-placeholder {
			display: block;
			position: relative;
			margin-bottom: 15px;
			text-align: center;
		}

		.cards-placeholder__item {
			opacity: 0.3;
			display: inline-block;
			margin-right: 10px;
			background-color: #fff;
			width: 30px;
			height: 5px;
			border-radius: 5px;

			transition: opacity 0.2s;
			will-change: opacity;
		}

		.cards-placeholder__item--active {
			opacity: 1;
		}
	</style>
	<!-- END PEMESANAN -->


	<style>
		/* jssor slider loading skin spin css */
		.jssorl-009-spin img {
			animation-name: jssorl-009-spin;
			animation-duration: 1.6s;
			animation-iteration-count: infinite;
			animation-timing-function: linear;
		}

		@keyframes jssorl-009-spin {
			from {
				transform: rotate(0deg);
			}

			to {
				transform: rotate(360deg);
			}
		}


		/*jssor slider bullet skin 132 css*/
		.jssorb132 {
			position: absolute;
		}

		.jssorb132 .i {
			position: absolute;
			cursor: pointer;
		}

		.jssorb132 .i .b {
			fill: #fff;
			fill-opacity: 0.8;
			stroke: #000;
			stroke-width: 1600;
			stroke-miterlimit: 10;
			stroke-opacity: 0.7;
		}

		.jssorb132 .i:hover .b {
			fill: #000;
			fill-opacity: .7;
			stroke: #fff;
			stroke-width: 2000;
			stroke-opacity: 0.8;
		}

		.jssorb132 .iav .b {
			fill: #000;
			stroke: #fff;
			stroke-width: 2400;
			fill-opacity: 0.8;
			stroke-opacity: 1;
		}

		.jssorb132 .i.idn {
			opacity: 0.3;
		}

		.jssora051 {
			display: block;
			position: absolute;
			cursor: pointer;
		}

		.jssora051 .a {
			fill: none;
			stroke: #fff;
			stroke-width: 360;
			stroke-miterlimit: 10;
		}

		.jssora051:hover {
			opacity: .8;
		}

		.jssora051.jssora051dn {
			opacity: .5;
		}

		.jssora051.jssora051ds {
			opacity: .3;
			pointer-events: none;
		}
	</style>
	<style>
		.jarak {
			margin-bottom: 50px;
			margin-left: 0px;
		}

		.img {}
	</style>
	<!-- produk -->
	<style>
		.oao {
			position: relative;
			margin: auto;

		}

		.box {
			margin-bottom: 20px;
			margin-left: 0px;
		}
	</style>


	<!--PRODUK AND TEAM-->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/produkdantesti/fonts/icomoon/style.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/produkdantesti/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/produkdantesti/css/magnific-popup.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/produkdantesti/css/jquery-ui.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/produkdantesti/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/produkdantesti/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/produkdantesti/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/produkdantesti/fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/produkdantesti/css/aos.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/produkdantesti/css/style.css">
	<!-- END -->
</head>

<body>
	<!-- jquery plugins here-->
	<!-- jquery -->
	<script src="<?= base_url(); ?>assets/js/home/js/jquery-1.12.1.min.js"></script>
	<!-- popper js -->
	<script src="<?= base_url(); ?>assets/js/home/js/popper.min.js"></script>
	<!-- bootstrap js -->
	<script src="<?= base_url(); ?>assets/js/home/js/bootstrap.min.js"></script>
	<!-- easing js -->
	<script src="<?= base_url(); ?>assets/js/home/js/jquery.magnific-popup.js"></script>
	<!-- swiper js -->
	<script src="<?= base_url(); ?>assets/js/home/js/swiper.min.js"></script>
	<!-- swiper js -->
	<script src="<?= base_url(); ?>assets/js/home/js/masonry.pkgd.js"></script>
	<!-- particles js -->
	<script src="<?= base_url(); ?>assets/js/home/js/owl.carousel.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/home/js/jquery.nice-select.min.js"></script>
	<!-- swiper js -->
	<script src="<?= base_url(); ?>assets/js/home/js/slick.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/home/js/jquery.counterup.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/home/js/waypoints.min.js"></script>
	<!-- custom js -->
	<script src="<?= base_url(); ?>assets/js/home/js/custom.js"></script>
	<!-- slider -->
	<script src="<?= base_url(); ?>assets/js/slider/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		window.jssor_1_slider_init = function() {

			var jssor_1_SlideoTransitions = [
				[{
					b: -1,
					d: 1,
					ls: 0.5
				}, {
					b: 0,
					d: 1000,
					y: 5,
					e: {
						y: 6
					}
				}],
				[{
					b: -1,
					d: 1,
					ls: 0.5
				}, {
					b: 200,
					d: 1000,
					y: 25,
					e: {
						y: 6
					}
				}],
				[{
					b: -1,
					d: 1,
					ls: 0.5
				}, {
					b: 400,
					d: 1000,
					y: 45,
					e: {
						y: 6
					}
				}],
				[{
					b: -1,
					d: 1,
					ls: 0.5
				}, {
					b: 600,
					d: 1000,
					y: 65,
					e: {
						y: 6
					}
				}],
				[{
					b: -1,
					d: 1,
					ls: 0.5
				}, {
					b: 800,
					d: 1000,
					y: 85,
					e: {
						y: 6
					}
				}],
				[{
					b: -1,
					d: 1,
					ls: 0.5
				}, {
					b: 500,
					d: 1000,
					y: 195,
					e: {
						y: 6
					}
				}],
				[{
					b: 0,
					d: 2000,
					y: 30,
					e: {
						y: 3
					}
				}],
				[{
					b: -1,
					d: 1,
					rY: -15,
					tZ: 100
				}, {
					b: 0,
					d: 1500,
					y: 30,
					o: 1,
					e: {
						y: 3
					}
				}],
				[{
					b: -1,
					d: 1,
					rY: -15,
					tZ: -100
				}, {
					b: 0,
					d: 1500,
					y: 100,
					o: 0.8,
					e: {
						y: 3
					}
				}],
				[{
					b: 500,
					d: 1500,
					o: 1
				}],
				[{
					b: 0,
					d: 1000,
					y: 380,
					e: {
						y: 6
					}
				}],
				[{
					b: 300,
					d: 1000,
					x: 80,
					e: {
						x: 6
					}
				}],
				[{
					b: 300,
					d: 1000,
					x: 330,
					e: {
						x: 6
					}
				}],
				[{
					b: -1,
					d: 1,
					r: -110,
					sX: 5,
					sY: 5
				}, {
					b: 0,
					d: 2000,
					o: 1,
					r: -20,
					sX: 1,
					sY: 1,
					e: {
						o: 6,
						r: 6,
						sX: 6,
						sY: 6
					}
				}],
				[{
					b: 0,
					d: 600,
					x: 150,
					o: 0.5,
					e: {
						x: 6
					}
				}],
				[{
					b: 0,
					d: 600,
					x: 1140,
					o: 0.6,
					e: {
						x: 6
					}
				}],
				[{
					b: -1,
					d: 1,
					sX: 5,
					sY: 5
				}, {
					b: 600,
					d: 600,
					o: 1,
					sX: 1,
					sY: 1,
					e: {
						sX: 3,
						sY: 3
					}
				}]
			];

			var jssor_1_options = {
				$AutoPlay: 1,
				$LazyLoading: 1,
				$CaptionSliderOptions: {
					$Class: $JssorCaptionSlideo$,
					$Transitions: jssor_1_SlideoTransitions
				},
				$ArrowNavigatorOptions: {
					$Class: $JssorArrowNavigator$
				},
				$BulletNavigatorOptions: {
					$Class: $JssorBulletNavigator$,
					$SpacingX: 20,
					$SpacingY: 20
				}
			};

			var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

			/*#region responsive code begin*/

			var MAX_WIDTH = 3000;

			function ScaleSlider() {
				var containerElement = jssor_1_slider.$Elmt.parentNode;
				var containerWidth = containerElement.clientWidth;

				if (containerWidth) {

					var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

					jssor_1_slider.$ScaleWidth(expectedWidth);
				} else {
					window.setTimeout(ScaleSlider, 30);
				}
			}

			ScaleSlider();

			$Jssor$.$AddEvent(window, "load", ScaleSlider);
			$Jssor$.$AddEvent(window, "resize", ScaleSlider);
			$Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
			/*#endregion responsive code end*/
		};
	</script>


	<!-- PRODUK AND TEAM -->
	<script src="<?= base_url(); ?>assets/js/produkdantesti/js/jquery-3.3.1.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/produkdantesti/js/jquery-migrate-3.0.1.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/produkdantesti/js/jquery-ui.js"></script>
	<script src="<?= base_url(); ?>assets/js/produkdantesti/js/jquery.easing.1.3.js"></script>
	<script src="<?= base_url(); ?>assets/js/produkdantesti/js/popper.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/produkdantesti/js/bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/produkdantesti/js/owl.carousel.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/produkdantesti/js/jquery.stellar.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/produkdantesti/js/jquery.countdown.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/produkdantesti/js/jquery.magnific-popup.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/produkdantesti/js/bootstrap-datepicker.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/produkdantesti/js/aos.js"></script>
	<script src="<?= base_url(); ?>assets/js/produkdantesti/js/main.js"></script>
	<!-- END -->
	<!-- login & register -->
	<script src="<?php echo base_url() . 'assets/css/login/vendor/jquery/jquery.min.js' ?>"></script>
	<script src="<?php echo base_url() . 'js/main.js' ?>"></script>
	<!-- end -->
	<!-- PEMESANAN -->
	<script src="<?= base_url(); ?>assets/js/produk.js"></script>
</body>