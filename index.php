<!-- 
	Autor: Emanuel Cândido 
	Email: emanueljosecandido@hotmail.com
	GitHub: https://github.com/EmanuelJoseCandido
	WebSite: COVID-19 em Angola.
	WebSite escolhido para fazer a recolha de dados: https://www.worldometers.info/coronavirus/
-->
<?php include_once("php/funcoes.php");  ?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="css/style.css">
		<title>COVID-19 EM ANGOLA</title>
	</head>
	<body>
		<header>
			<div class="logo">
				<span class="covid">
					<span class="black">
						<span class="black">Co</span><span class="yellow">vi</span><span class="red">d-19</span>
					</span> 
				</span> 
				<span class="barra">
					<span class="yellow">|</span>
				</span>
				<span class="angola">
					<span class="black">An</span><span class="yellow">go</span><span class="red">la</span>
				</span>
			</div>
			<nav>
				<ul class="nav-links">
					<li><a href="#inicio">Inicio</a></li>
					<li><a href="#combate">Combate</a></li>
					<li><a href="#medidas">Medidas</a></li>
					<li><a href="#sobre">Sobre</a>
						<ul class="sub-menu">
							<li><a href="#covid-19">Covid-19</a></li>
							<li><a href="#web-site">Web-Site</a></li>
						</ul>
					</li>
				</ul>
			</nav>

			<a class="cta" href="#"><button>Contacto</button></a>
		</header>

		<section class="hero">
			<div class="text">
				<div class="titles">
					<h1>Painel do Covid-19 em tempo real</h1>
				</div>

				<div class="data">
					<div class="cases">
						<p class="info-label">Casos</p>
						<p class="info-number cases"><?php echo $casosConfirmados; ?></p>
					</div>

					<div class="recovered">
						<p class="info-label">Recuperados</p>
						<p class="info-number recovered"><?php echo $recuperados; ?></p>
					</div>

					<div class="deaths">
						<p class="info-label">Mortes</p>
						<p class="info-number deaths"><?php echo $mortes; ?></p>
					</div>					
				</div>
			</div>

			<div class="active">
				<p class="info-label">Casos ativos</p>
				<p class="info-number recovered"><?php echo $casosAtivos; ?></p>	
			</div>
		</section>
		<main>
			<section>
				<article>
				</article>
			</section>
			<aside>
				<article>
				</article>
			</aside>
		</main>
	</body>
	 <footer>
		<p>Todos os direitos reservados <br> Copyright &copy; 2020 - by <a href="http://facebook.com/EmanuelCandido">Emanuel Cândido</a></p>
	</footer>
	<script type="text/javascript" src="js/main.js"></script>
</html>