<!DOCTYPE html>

<html class="no-js" lang="pt-BR">
<head>
	<!-- ENGINE -->
	<title>Fuori Network.</title>
	<?php include 'engine-libraries.php'; ?>
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