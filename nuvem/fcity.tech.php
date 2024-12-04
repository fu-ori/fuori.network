<!DOCTYPE html>

<html class="no-js" lang="pt-BR">
<head>
	<!-- ENGINE -->
	<title>Fuori Network.</title>

	<!-- DEFAULTS -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="https://cdn.fcity.tech/images/favicon.png" type="image/png">

	<!-- TAILWIND -->
	<script src="https://cdn.tailwindcss.com"></script>

	<!-- FANCYBOX -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

	<!-- SWIPER -->
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
	<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

	<!-- JQUERY -->
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

	<!-- SCROLL -->
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('a[href^="#"]').bind('click.smoothscroll',function (e) {
				e.preventDefault();
				var target = this.hash,
				$target = $(target);

				$('html, body').stop().animate( {
					'scrollTop': $target.offset().top-0
				}, 1200, function () {
					window.location.hash = target;
				} );
			} );
		} );
	</script>
	<style type="text/css">
		.menu {
			position: fixed;       
			z-index: 10;       
		}
		ul li{
			padding-bottom: 10px;
		}
		.divider{
			height: 30px;
		}
	</style>
</head>

<body class="bg-gray-100 text-gray-800">
	<header class="bg-stone-500 text-white py-4">
		<div class="container mx-auto flex justify-between items-center px-4">
			<h1 class="text-2xl">FUORI NETWORK</h1>
			<nav class="space-x-4">
				<a href="index">Startup's Directory</a>
			</nav>
		</div>
	</header>

	<main class="container mx-auto px-4 py-8">
		<section class="mb-8">
			<h2 class="text-4xl font-bold mb-4">FCity</h2>
		</section>

		<section class="grid grid-cols-1 md:grid-cols-[1fr_3fr] gap-6">
			<!-- MENU -->
			<div>
				<div class="menu">
					<h3 class="font-bold text-xl mb-2">Navegação</h3>
					<ul>
						<li>
							<a href="" class="bg-stone-500 hover:bg-stone-700 text-white text-sm py-1 px-2 rounded">Sobre</a>
						</li>
						<li>
							<a href="" class="bg-stone-500 hover:bg-stone-700 text-white text-sm py-1 px-2 rounded">Anunciar</a>
						</li>
						<li>
							<a href="" class="bg-stone-500 hover:bg-stone-700 text-white text-sm py-1 px-2 rounded">Política de Privacidade</a>
						</li>
						<li><hr></li>
						<li>
							<a href="" class="bg-stone-500 hover:bg-stone-700 text-white text-sm py-1 px-2 rounded">Central de Ajuda</a>
						</li>
						<li>
							<a href="" class="bg-stone-500 hover:bg-stone-700 text-white text-sm py-1 px-2 rounded">Como Comprar</a>
						</li>
						<li>
							<a href="" class="bg-stone-500 hover:bg-stone-700 text-white text-sm py-1 px-2 rounded">Fale Conosco</a>
						</li>
						<li>
							<a href="" class="bg-stone-500 hover:bg-stone-700 text-white text-sm py-1 px-2 rounded">Termos de Uso</a>
						</li>
					</ul>
				</div>
			</div>

			<!-- CONTENT -->
			<div>
				<div class="bg-white p-6 rounded shadow" id="terms">
					<h3 class="font-bold text-xl mb-2" >Sobre</h3>
					<?php include 'docs-fcity/about.php'; ?>
				</div>
				<div class="divider"></div>
				<div class="bg-white p-6 rounded shadow" id="terms">
					<h3 class="font-bold text-xl mb-2" >Termos de Uso</h3>
					<?php include 'docs-fcity/terms.php'; ?>
				</div>
			</div>
		</section>
	</main>

</body>
</html>