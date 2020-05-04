<!-- 
	Autor: Emanuel Cândido 
	Email: emanueljosecandido@hotmail.com
	GitHub: https://github.com/EmanuelJoseCandido
	WebSite: COVID-19 em Angola.
	WebSite escolhido para fazer a recolha de dados: https://www.worldometers.info/coronavirus/
-->

<!-- Include the page "scraping.php" -->
<?php include_once("php/scraping.php");?>
<!-- Include the page "scraping.php" -->

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<!-- Stylesheet this page -->
		<link rel="stylesheet" href="css/style.css"> 
		<!-- Stylesheet this page -->

		<!-- Stylesheet this page -->
		<link rel="stylesheet" href="../App_Yetu/vendor/fontawesome-free-5.11.2-web/css/all.css"> 
		<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"> -->
		<!-- Stylesheet this page -->

		<title>COVID-19 | ANGOLA</title>
	</head>
	<body>


	<!-- Header -->
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
					<li><a href="#numbers">Números</a></li>
					<li><a href="#medidas">Medidas</a></li>
					<li><a href="#about">Sobre</a>
						<ul class="sub-menu">
							<li><a href="#covid-19">Covid-19</a></li>
							<li><a href="#team">Equipe</a></li>
							<li><a href="#website">Website</a></li>
						</ul>
					</li>
				</ul>
			</nav>

			<a class="contact" href="#contact"><button>Contacto</button></a>
		</header>
		<!-- Header -->


		<!-- Hero -->
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
		<!-- Hero -->


		<!-- Numbers -->
		<section id="numbers">
			<!-- In construction  -->
			<h1>Números</h1>
		</section>
		<!-- Numbers -->
		

		<!-- Medidas -->
		<section id="medidas">
			<!-- In construction  -->
		</section>
		<!-- Medidas -->


		<!-- About -->
		<section id="about">
			<article id="covid-19">
				<!-- In construction  -->
				<h1>Covid-19</h1>

				<div class="about-covid-19">
					<div class="item-covid-19">
						<h2>O que é Covid-19?</h2>
						<div class="modal-covid-19">
							<span class="close">&times;</span>
							<div class="description-covid-19">
								<h3>O que é Covid-19?</h3>
								<span>
									<p>
										A COVID-19 é uma doença causada pelo coronavírus SARS-CoV-2, que apresenta um quadro clínico que varia de infecções assintomáticas a quadros respiratórios graves. De acordo com a Organização Mundial de Saúde (OMS), a maioria dos pacientes com COVID-19 (cerca de 80%) podem ser assintomáticos e cerca de 20% dos casos podem requerer atendimento hospitalar por apresentarem dificuldade respiratória e desses casos aproximadamente 5% podem necessitar de suporte para o tratamento de insuficiência respiratória (suporte ventilatório).
									</p>

									<h4>O que é o coronavírus?</h4>
									
									<p>
										Coronavírus é uma família de vírus que causam infecções respiratórias. O novo agente do coronavírus foi descoberto em 31/12/19 após casos registrados na China. Provoca a doença chamada de coronavírus (COVID-19).
									</p>

									<p>
										Os primeiros coronavírus humanos foram isolados pela primeira vez em 1937. No entanto, foi em 1965 que o vírus foi descrito como coronavírus, em decorrência do perfil na microscopia, parecendo uma coroa.
									</p>
									
									<p>
										A maioria das pessoas se infecta com os coronavírus comuns ao longo da vida, sendo as crianças pequenas mais propensas a se infectarem com o tipo mais comum do vírus. Os coronavírus mais comuns que infectam humanos são o alpha coronavírus 229E e NL63 e beta coronavírus OC43, HKU1.
									</p>
								</span>
							</div>
						</div>
					</div>

					<div class="item-covid-19">
						<h2>Quais são os sintomas?</h2>
						<div class="modal-covid-19">
							<span class="close">&times;</span>
							<div class="description-covid-19">
								<h3>Quais são os sintomas?</h3>
								<span>
									<p>
										Os sintomas da COVID-19 podem variar de um simples resfriado até uma pneumonia severa. Sendo os sintomas mais comuns:
									</p>
										
										<ul>
											<li>Tosse</li>
											<li>Febre</li> 
											<li>Coriza</li> 
											<li>Dor de garganta</li>
											<li>Dificuldade para respirar</li>
										</ul>
								</span>
							</div>
						</div>
					</div>

					<div class="item-covid-19">
						<h2>Como é transmitido?</h2>
						<div class="modal-covid-19">
							<span class="close">&times;</span>
							<div class="description-covid-19">
								<h3>Como é transmitido?</h3>
								<span>
									<p>
										A transmissão acontece de uma pessoa doente para outra ou por contato próximo por meio de: 
									</p>
										
										<ul>
											<li>Toque do aperto de mão;</li>
											<li>Gotículas de saliva;</li>
											<li>Espirro;</li>
											<li>Tosse;</li>
											<li>Catarro;</li>
											<li>Objetos ou superfícies contaminadas, como celulares, mesas, maçanetas, brinquedos, teclados de computador etc.</li>
										</ul>
								</span>
							</div>
						</div>
					</div>

					<div class="item-covid-19">
						<h2>Diagnóstico?</h2>
						<div class="modal-covid-19">
							<span class="close">&times;</span>
							<div class="description-covid-19">
								<h3>Diagnóstico?</h3>
								<span>
									<p>
										O diagnóstico da COVID-19 é realizado primeiramente pelo profissional de saúde que deve avaliar a presença de critérios clínicos:
									</p>
										
										<ul>
											<li>Pessoa com quadro respiratório agudo, caracterizado por sensação febril ou febre, que pode ou não estar presente na hora da consulta (podendo ser relatada ao profissional de saúde), acompanhada de tosse OU dor de garganta OU coriza OU dificuldade respiratória, o que é chamado de Síndrome Gripal.</li>

											<li>Pessoa com desconforto respiratório/dificuldade para respirar OU pressão persistente no tórax OU saturação de oxigênio menor do que 95% em ar ambiente OU coloração azulada dos lábios ou rosto, o que é chamado de Síndrome Respiratória Aguda Grave.</li>
										</ul>

									<p>
										Caso o paciente apresente os sintomas, o profissional de saúde poderá solicitar exame laboratoriais:
									</p>
										
										<ul>
											<li>
												De biologia molecular (RT-PCR em tempo real) que diagnostica tanto a COVID-19, a Influenza ou a presença de Vírus Sincicial Respiratório (VSR).
											</li>

											<li>
												Imunológico (teste rápido) que detecta, ou não, a presença de anticorpos em amostras coletadas somente após o sétimo dia de início dos sintomas.
											</li>
										</ul>
									</p>

									<p>
										O diagnóstico da COVID-19 também pode ser realizado a partir de critérios como: histórico de contato próximo ou domiciliar, nos últimos 7 dias antes do aparecimento dos sintomas, com caso confirmado laboratorialmente para COVID-19 e para o qual não foi possível realizar a investigação laboratorial específica, também observados pelo profissional durante a consulta.
									</p>
								</span>
							</div>
						</div>
					</div>

					<div class="item-covid-19">
						<h2>Como se proteger?</h2>
						<div class="modal-covid-19">
							<span class="close">&times;</span>
							<div class="description-covid-19">
								<h3>Como se proteger?</h3>
								<span>
									<p>
										As recomendações de prevenção à COVID-19 são as seguintes:
									</p>
										
										<ul>
											<li>Lave com frequência as mãos até a altura dos punhos, com água e sabão, ou então higienize com álcool em gel 70%.</li>

											<li>Ao tossir ou espirrar, cubra nariz e boca com lenço ou com o braço, e não com as mãos.</li>

											<li>Evite tocar olhos, nariz e boca com as mãos não lavadas.</li>
											<li>Ao tocar, lave sempre as mãos como já indicado.</li>

											<li>Mantenha uma distância mínima de cerca de 2 metros de qualquer pessoa tossindo ou espirrando.</li>

											<li>Evite abraços, beijos e apertos de mãos. Adote um comportamento amigável sem contato físico, mas sempre com um sorriso no rosto.</li>

											<li>Higienize com frequência o celular e os brinquedos das crianças.</li>

											<li>Não compartilhe objetos de uso pessoal, como talheres, toalhas, pratos e copos.</li>

											<li>Mantenha os ambientes limpos e bem ventilados.</li>

											<li>Evite circulação desnecessária nas ruas, estádios, teatros, shoppings, shows, cinemas e igrejas. Se puder, fique em casa.</li>
												
											<li>Se estiver doente, evite contato físico com outras pessoas, principalmente idosos e doentes crônicos, e fique em casa até melhorar.</li>

											<li>Durma bem e tenha uma alimentação saudável.</li>

											<li>Utilize máscaras caseiras ou artesanais feitas de tecido em situações de saída de sua residência. </li>
										</ul>
									
									<h4>Dicas para viajantes</h4>
										
											<p>Caso você precise viajar, avalie a real necessidade.  Se for inevitável viajar, previna-se e siga as orientações das autoridades de saúde locais.</p>

											<p>Ao voltar de viagens internacionais ou locais recomenda-se:</p>
										<ul>
											<li>No caso de viagens internacionais: o isolamento domiciliar voluntário por 7 dias após o desembarque, mesmo que não tenha apresentado os sintomas.</li>

											<li>No caso de viagens locais: ficar atento à sua condição de saúde, principalmente nos primeiros 14 dias.</li>

											<li>Reforçar os hábitos de higiene, como lavar as mãos com água e sabão.</li>

											<li>Caso apresente sintomas de gripe, siga as orientações do Ministério da Saúde para isolamento domiciliar.</li>
										</ul>
								</span>
							</div>
						</div>
					</div>

					<div class="item-covid-19">
						<h2>Se eu ficar doente?</h2>
						<div class="modal-covid-19">
							<span class="close">&times;</span>
							<div class="description-covid-19">
								<h3>Se eu ficar doente?</h3>
								<span>
									<p>
										Caso você se sinta doente, com sintomas de gripe, evite contato físico com outras pessoas, principalmente idosos e doentes crônicos e fique em casa por 14 dias. Só procure um hospital de referência se estiver com falta de ar.
									</p>

									<p>
										Em caso de diagnóstico positivo para COVID-19, siga as seguintes recomendações:
									</p>

									<ul>
										<li>Fique em isolamento domiciliar.</li>
										<li>Utilize máscara o tempo todo.</li>
										<li>Se for preciso cozinhar, use máscara de proteção, cobrindo boca e nariz todo o tempo.</li>
										<li>Depois de usar o banheiro, nunca deixe de lavar as mãos com água e sabão e sempre limpe vaso, pia e demais superfícies com álcool ou água sanitária para desinfecção do ambiente.</li>
										<li>Separe toalhas de banho, garfos, facas, colheres, copos e outros objetos apenas para seu uso.</li>
										<li>O lixo produzido precisa ser separado e descartado.</li>
										<li>Sofás e cadeiras também não podem ser compartilhados e precisam ser limpos frequentemente com água sanitária ou álcool 70%.</li>
										<li>Mantenha a janela aberta para circulação de ar do ambiente usado para isolamento e a porta fechada, limpe a maçaneta frequentemente com álcool 70% ou água sanitária.</li>
									</ul>
								</span>
							</div>
						</div>
					</div>
					
				</div>
				

			</article>


			<article id="team">
				<!-- In construction  -->
				<h1>Equipe</h1>

				<!-- Name: Emanuel Cândido -->
				<div class="team-content">
					<div class="pic">
						<img src="galeira/imagens/Sessa.jpg" alt="">
					</div>
					
					<div class="description">
						<h3 class="name">João Sessa</h3>
						<span class="occupation">Desenvolvedor Web</span>
					</div>

					<ul class="social">
						<li><a href="#"><i class="fab fa-facebook"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
					</ul>
				</div>
				<!-- Name: Emanuel Cândido -->

				<!-- Name: Emanuel Cândido -->
				<div class="team-content">
					<div class="pic">
						<img src="galeira/imagens/Emanuel.jpg" alt="">
					</div>
					
					<div class="description">
						<h3 class="name">Emanuel Cândido</h3>
						<span class="occupation">Desenvolvedor Web</span>
					</div>

					<ul class="social">
						<li><a href="#"><i class="fab fa-facebook"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
					</ul>
				</div>
				<!-- Name: Emanuel Cândido -->

				<!-- Name: Emanuel Cândido -->
				<div class="team-content">
					<div class="pic">
						<img src="galeira/imagens/Funete.jpg" alt="">
					</div>
					
					<div class="description">
						<h3 class="name">Funete Xindome</h3>
						<span class="occupation">Desenvolvedor Web</span>
					</div>

					<ul class="social">
						<li><a href="#"><i class="fab fa-facebook"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
					</ul>
				</div>
				<!-- Name: Emanuel Cândido -->
			</article>


			<article id="website">
				<!-- In construction  -->
				<h1>Website</h1>

			</article>
		</section>
		<!-- About -->
	</body>

	<!-- Footer -->
	 <footer>
		<p>Todos os direitos reservados <br> Copyright &copy; 2020 - by <a href="http://facebook.com/EmanuelCandido">Emanuel Cândido</a></p>
	</footer>
	<!-- Footer -->

	<!-- Javascript this page -->
	<script type="text/javascript" src="js/main.js"></script>
	<!-- Javascript this page -->
</html>